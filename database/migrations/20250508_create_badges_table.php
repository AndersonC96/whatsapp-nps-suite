<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS badges (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(50), descricao TEXT, icone VARCHAR(255))";
        $db->exec($sql);
    };