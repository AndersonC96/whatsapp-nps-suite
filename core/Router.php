<?php
    namespace Core;
    class Router {
        public function dispatch() {
            // Captura a URI corretamente, mesmo em subpastas como /whatsapp-nps-suite/public
            $scriptName = dirname($_SERVER['SCRIPT_NAME']);
            $uri = str_replace($scriptName, '', $_SERVER['REQUEST_URI']);
            $uri = parse_url($uri, PHP_URL_PATH);
            $uri = trim($uri, '/');
            $segments = explode('/', $uri);
            $controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'HomeController';
            $method = $segments[1] ?? 'index';
            $controllerClass = 'App\\Controllers\\' . $controllerName;
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $method)) {
                    call_user_func_array([$controller, $method], array_slice($segments, 2));
                } else {
                    http_response_code(404);
                    echo "Método '$method' não encontrado em $controllerName.";
                }
            } else {
                http_response_code(404);
                echo "Controller '$controllerName' não encontrado.";
            }
        }
    }