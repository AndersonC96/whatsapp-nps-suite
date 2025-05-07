<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        // Verifica se já existe o admin
        $check = $db->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $check->execute(['admin@nps.com']);
        if ($check->fetchColumn() == 0) {
            $stmt = $db->prepare("INSERT INTO users (nome, email, senha, tipo, ativo) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([
                'Admin Master',
                'admin@nps.com',
                password_hash('admin123', PASSWORD_DEFAULT),
                'admin',
                true
            ]);
            echo "Usuário admin criado.\n";
        } else {
            echo "Usuário admin já existe. Pulando seeder.\n";
        }
    };