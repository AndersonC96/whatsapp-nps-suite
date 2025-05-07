<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO users (nome, email, senha, tipo, ativo) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            'Admin Master',
            'admin@nps.com',
            password_hash('admin123', PASSWORD_DEFAULT),
            'admin',
            true
        ]);
    };