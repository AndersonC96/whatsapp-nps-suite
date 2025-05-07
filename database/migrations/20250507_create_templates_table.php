<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS templates (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100), conteudo TEXT, aprovado BOOLEAN DEFAULT FALSE, aprovado_em DATETIME,criado_por INT, criado_em DATETIME DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY (criado_por) REFERENCES users(id))";
        $db->exec($sql);
    };