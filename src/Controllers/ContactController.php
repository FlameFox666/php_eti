<?php

    namespace FlameFox666\Project\Controllers;
    
    use FlameFox666\Project\Viewer;

    class ContactController {
        public function index() : void {
            $page = 'contact';
            $title = 'Contacnt Page';
            $content = 'We\'re ghost organisation!';
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