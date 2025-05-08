<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS settings (id INT AUTO_INCREMENT PRIMARY KEY, chave VARCHAR(100) UNIQUE, valor TEXT)";
        $db->exec($sql);
    };