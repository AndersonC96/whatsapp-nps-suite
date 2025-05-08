<?php
    use PHPUnit\Framework\TestCase;
    use Core\Database;
    class UserSeederTest extends TestCase {
        public function testAdminUserExists() {
            $db = Database::connect();
            $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute(['admin@nps.com']);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->assertIsArray($user);
            $this->assertEquals('admin@nps.com', $user['email']);
            $this->assertEquals('admin', $user['tipo']);
        }
    }