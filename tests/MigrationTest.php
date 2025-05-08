<?php
    use PHPUnit\Framework\TestCase;
    use Core\Database;
    class MigrationTest extends TestCase {
        public function testCreateTemporaryTable() {
            $db = Database::connect();
            $db->exec("DROP TABLE IF EXISTS temp_test_table");
            $db->exec("CREATE TABLE temp_test_table (id INT PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(100))");
            $result = $db->query("SHOW TABLES LIKE 'temp_test_table'");
            $this->assertNotFalse($result->fetch());
            $db->exec("DROP TABLE temp_test_table");
        }
    }