<?php

    namespace FlameFox666\Project;

    use Latte;

    class Viewer {
        private $params;

        public function __construct(array $params) {
            $this->params = $params;
        }
/*
        private array $data = [];

        public function __construct(array $data = []){
            $this->data = $data;
        }
*/
        public function render(): void
        {
            $latte = new Latte\Engine;
            $latte->setTempDirectory(__DIR__ . '/../views/cache');
/*
            $isUserLoggedIn = !empty($_SESSION['login']) && $_SESSION['login'] === 'Test';

            $params = $this->data;
            $params['isUserLoggedIn'] = $isUserLoggedIn;
*/    
            $page_file = __DIR__ . '/../views/pages/' . $this->params['page'] . '.latte';
            if (!file_exists($page_file)) {
                throw new \Exception("Template file {$page_file} does not exist.");
            }

            try {
                $latte->render(__DIR__ . '/../views/index.latte', $this->params);
            } catch (\Exception $e) {
                echo "Error: " . $e->getMessage();
            }
            //$latte->render(__DIR__ . '/../views/index.latte', $this->params);
        }
    }