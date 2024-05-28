<?php

    namespace FlameFox666\Project\Controllers;
    
    use FlameFox666\Project\Viewer;

    class ContactsController {
        public function index() : void {
            $page = 'Contacts';
            $title = 'Contacts Page';
            $content = 'We\'re ghost organisation!';
            $info = 'never gonna let\'s you down!';

            $view = new Viewer([
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]);
            $view->render();
        }
    }