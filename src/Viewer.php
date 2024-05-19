<?php
    namespace FlameFox666\Project;

    use Jenssegers\Blade\Blade;

    class Viewer
    {
        private array $data = [];
        
        public function __construct(array $data = []){
            $this->data = $data;
        }

        public function render(): void
        {
            $views = __DIR__ . '/../views';
            $cache = __DIR__ . '/../views/cache';

            $blade = new Blade($views, $cache);

            $isUserLoggedIn = !empty($_SESSION['login']) && $_SESSION['login'] === 'Test';

            $params = $this->data;
            $params['isUserLoggedIn'] = $isUserLoggedIn;

            echo $blade->render('index', $params);
        }
    }
