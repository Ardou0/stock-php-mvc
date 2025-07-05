<?php
class Router {
    private $routes = [];

    public function add($route, $controller, $action) {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];
            $controller->$action();
        } else {
            $url = "error";
            $controller = $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];
            $controller->$action();
        }
    }
}
?>
