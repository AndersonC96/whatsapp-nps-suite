<?php
    use PHPUnit\Framework\TestCase;
    use Core\Env;
    use Core\Database;
    class DatabaseTest extends TestCase {
        public static function setUpBeforeClass(): void {
            Env::load(__DIR__ . '/../.env');
        }
        public function testDatabaseConnection() {
            $pdo = Database::connect();
            $this->assertInstanceOf(PDO::class, $pdo);
        }
    }