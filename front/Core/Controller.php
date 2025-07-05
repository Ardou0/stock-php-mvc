<?php
class Controller {
    public function model($model) {
        require_once './Models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        $content = './Views/' . $view . '.php';
        require_once './Views/layouts/main.php';
    }
}
?>
