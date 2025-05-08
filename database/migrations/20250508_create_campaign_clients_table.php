<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS campaign_clients (id INT AUTO_INCREMENT PRIMARY KEY, campaign_id INT, client_id INT, status ENUM('pendente', 'enviado', 'falha', 'lida', 'respondido') DEFAULT 'pendente', enviado_em DATETIME, FOREIGN KEY (campaign_id) REFERENCES campaigns(id), FOREIGN KEY (client_id) REFERENCES clients(id))";
        $db->exec($sql);
    };