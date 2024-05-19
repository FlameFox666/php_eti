<?php

    namespace FlameFox666\Project\Controllers;

    use FlameFox666\Project\Viewer;

    class LoginController {
        public function index() {
            $page = 'login';
            $title = 'Login Page';

            $view = new Viewer(
                [
                    'page' => $page,
                    'title' => $title
                ]
            );

            $view->render();
        }

        public function auth() : void {
            if(!isset($_POST['login'])) {
                header('Location: /login');
                exit;
            }

            $login = $_POST['login'] ?? '';

            if ($login === 'Test') {
                $_SESSION['login'] = $login;
                header('Location: /contacts');
            } else {

                header('Location: /login');
            }
            exit;
        }
    }