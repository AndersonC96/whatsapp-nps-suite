<?php
    use PHPUnit\Framework\TestCase;
    use Core\Controller;
    class DummyController extends Controller {
        public function testViewOutput() {
            ob_start();
            $this->view('test', ['msg' => 'hello']);
            return ob_get_clean();
        }
    }
    class ControllerTest extends TestCase {
        public function testViewRendersCorrectly() {
            $controller = new DummyController();
            // Simula uma view
            $viewPath = __DIR__ . '/../app/Views/test.php';
            if (!is_dir(dirname($viewPath))) {
                mkdir(dirname($viewPath), 0777, true);
            }
            file_put_contents($viewPath, "<p><?= \$msg ?></p>");
            $output = $controller->testViewOutput();
            $this->assertStringContainsString('<p>hello</p>', $output);
            unlink($viewPath);
        }
    }