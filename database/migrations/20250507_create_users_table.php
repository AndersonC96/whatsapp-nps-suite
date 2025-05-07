<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100), email VARCHAR(150) UNIQUE, senha VARCHAR(255), avatar VARCHAR(255), tipo ENUM('admin', 'representante', 'cliente'), ativo BOOLEAN DEFAULT TRUE, autenticador_secret VARCHAR(255), criado_em DATETIME DEFAULT CURRENT_TIMESTAMP)";
        $db->exec($sql);
    };