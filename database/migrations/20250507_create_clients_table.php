<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS clients (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100), telefone VARCHAR(20), email VARCHAR(150), representante_id INT, cidade VARCHAR(100), estado VARCHAR(50), pais VARCHAR(50), criado_em DATETIME DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY (representante_id) REFERENCES users(id))";
        $db->exec($sql);
    };