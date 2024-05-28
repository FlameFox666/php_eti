<?php

    namespace FlameFox666\Project\Controllers;
    
    //use FlameFox666\Project\Database;
    use FlameFox666\Project\Viewer;
    //use PDO;

    class HomeController {
        public function index() : void {
            $page = 'home';
            $title = 'Home Page';
            $content = 'Home Page';
    /*
            $query = "SELECT * FROM ".Database::$table." ORDER BY count";
            $stmt = Database::executeQuery($query);
            $data = [];

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
    */
            $view = new Viewer([
                'page' => $page,
                'title' => $title,
                'content' => $content,
    //          'data' => $data
            ]);
            $view->render();
        }
        /*
        public function handleForm() : void {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                header('Location: /');
                return;
            }
    
            $name = $this->filterPost('name');
            $count = $this->filterPost('count');
    
            if ($name === null || $count === null) {
                header('Location: /');
                return;
            }

            $query = "INSERT INTO ".Database::$table." (name, count) VALUES (:name, :count)";
            Database::executeQuery($query, ['name' => $name, 'count' => $count]);

            header('Location: /');
        }
        */
        /*
        public function handleFormDelete(): void
        {
            $id = $_GET['id'] ?? null;

            $query = "DELETE FROM ".Database::$table." WHERE id = :id";
            Database::executeQuery($query, ['id' => $id]);

            header('Location: /');
        }
        
        private function filterPost(string $key): ?string
        {
            return isset($_POST[$key]) && is_string($_POST[$key]) ? htmlspecialchars($_POST[$key]) : null;
        }
        */
    }
    