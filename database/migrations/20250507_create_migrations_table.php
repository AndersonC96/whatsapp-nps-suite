<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS migrations (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255) UNIQUE, executado_em DATETIME DEFAULT CURRENT_TIMESTAMP)";
        $db->exec($sql);
    };