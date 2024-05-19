<?php

    namespace FlameFox666\Project\Controllers;
    
    use FlameFox666\Project\Viewer;

    class AboutController {
        public function index() : void {
            $page = 'about';
            $title = 'About Page';
            $content = 'Hello! It\'s fox plush shop!';
            $info = 'never gonna give you up!';

            $view = new Viewer([
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]);
            $view->render();
        }
    }