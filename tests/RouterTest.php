<?php
    use PHPUnit\Framework\TestCase;
    use Core\Router;
    class RouterTest extends TestCase {
        public function testRouterLoadsDefaultController() {
            $_SERVER['REQUEST_URI'] = '/';
            $_SERVER['SCRIPT_NAME'] = '/index.php';
            $router = new Router();
            ob_start();
            $router->dispatch();
            $output = ob_get_clean();
            $this->assertStringContainsString('Bem-vindo à Plataforma NPS', $output);
        }
    }