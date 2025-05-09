<?php
    namespace Core;
    class Router {
        protected array $routes;
        public function __construct() {
            $this->routes = require __DIR__ . '/../routes/web.php';
        }
        public function dispatch() {
            $method = $_SERVER['REQUEST_METHOD'];
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
            $route = trim(str_replace($base, '', $uri), '/');
            $action = $this->routes[$method][$route] ?? null;
            if (!$action) {
                http_response_code(404);
                echo "Rota '$route' [$method] não encontrada.";
                return;
            }
            [$controllerName, $methodName] = explode('@', $action);
            $controllerClass = 'App\\Controllers\\' . $controllerName;
            if (!class_exists($controllerClass) || !method_exists($controllerClass, $methodName)) {
                http_response_code(500);
                echo "Erro: controlador ou método inválido: $controllerClass@$methodName";
                return;
            }
            $controller = new $controllerClass();
            call_user_func([$controller, $methodName]);
        }
    }