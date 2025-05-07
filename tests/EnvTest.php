<?php
    use PHPUnit\Framework\TestCase;
    use Core\Env;
    class EnvTest extends TestCase {
        public function testEnvLoadsVariable() {
            $tempEnv = __DIR__ . '/.env.test';
            file_put_contents($tempEnv, "TEST_KEY=abc123");
            Env::load($tempEnv);
            $this->assertEquals('abc123', getenv('TEST_KEY'));
            $this->assertEquals('abc123', $_ENV['TEST_KEY']);
            unlink($tempEnv);
        }
    }