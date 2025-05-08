<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS api_tokens (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100), token VARCHAR(255), criado_em DATETIME DEFAULT CURRENT_TIMESTAMP, expiracao DATETIME)";
        $db->exec($sql);
    };