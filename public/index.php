<?php

    session_start();

    require_once __DIR__ . '/../vendor/autoload.php';
    
    //$db = new FlameFox666\Project\Database();

    $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {

        $homeController = new FlameFox666\Project\Controllers\HomeController();
        $aboutController = new FlameFox666\Project\Controllers\AboutController();
        $contactsController = new FlameFox666\Project\Controllers\ContactsController();
    
        $r->addRoute('GET', '/', [$homeController, 'index']);
        $r->addRoute('GET', '/home', [$homeController, 'index']);
        $r->addRoute('GET', '/about', [$aboutController, 'index']);
        $r->addRoute('GET', '/contacts', [$contactsController, 'index']);
        });
    });

    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
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
            if (is_callable($handler)) {
                call_user_func($handler, $vars);
            } else {
                $handler->handle($handler, $vars);
            }
            break;
    }
