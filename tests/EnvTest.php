<?php
    use PHPUnit\Framework\TestCase;
    use Core\Env;
    class EnvTest extends TestCase {
        public function testEnvLoadsVariable() {
            // Simula carregamento de .env temporário
            $tempEnv = __DIR__ . '/.env.test';
            file_put_contents($tempEnv, "TEST_VAR=123");
            Env::load($tempEnv);
            $this->assertEquals('123', getenv('TEST_VAR'));
            unlink($tempEnv); // limpa o teste
        }
    }