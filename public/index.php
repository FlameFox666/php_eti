<?php

    session_start();

    require_once __DIR__ . '/../vendor/autoload.php';
    
    $db = new FlameFox666\Project\Database();

    $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {

        $homeController = new FlameFox666\Project\Controllers\HomeController();
        $aboutController = new FlameFox666\Project\Controllers\AboutController();
        $contactController = new FlameFox666\Project\Controllers\ContactController();
        // Додали контролер для сторінки входу
        $loginController = new FlameFox666\Project\Controllers\LoginController();

        // Додали middleware для перевірки авторизації
        $authMiddleware = new FlameFox666\Project\AuthMiddleware();

        $r->addRoute('GET', '/', [$homeController, 'index']);
        $r->addRoute('GET', '/home', [$homeController, 'index']);
        $r->addRoute('GET', '/about', [$aboutController, 'index']);

        // Додаємо маршрути для сторінки входу
        $r->addRoute('GET', '/login', [$loginController, 'index']);
        $r->addRoute('POST', '/login', [$loginController, 'auth']);

        // Додаємо маршрут для виходу
        $r->addRoute('GET', '/logout', function ($vars) {
            session_destroy();
            header('Location: /login');
        });

        // Додаємо "обгортку" для контролера сторінки контактів у вигляді мідлвару
        $r->addRoute('GET', '/contacts', function ($vars) use ($authMiddleware, $contactController) {
            return $authMiddleware->handle([$contactController, 'index'], $vars);
        });

        $r->addRoute('POST', '/',[$homeController, 'handleForm']);
        $r->addRoute('GET', '/home/delete', [$homeController, 'handleFormDelete']);
    });

    // Fetch method and URI from somewhere
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    // Strip query string (?foo=bar) and decode URI
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
    var_dump($routeInfo); // Отладочный вывод
    switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            // ... 404 Not Found
            header('Location: /');
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            // ... 405 Method Not Allowed
            header('Location: /');
            break;
        case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            var_dump($handler); // Отладочный вывод
            if (is_callable($handler)) {
                call_user_func($handler, $vars);
            } else {
                $handler[0]->{$handler[1]}($vars);
            }
            break;
}
    