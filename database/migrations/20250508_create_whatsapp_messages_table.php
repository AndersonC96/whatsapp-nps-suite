<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS whatsapp_messages (id INT AUTO_INCREMENT PRIMARY KEY, campaign_client_id INT, mensagem TEXT, status ENUM('pendente', 'enviado', 'falha', 'lida'), resposta TEXT, media_url TEXT, enviado_em DATETIME, FOREIGN KEY (campaign_client_id) REFERENCES campaign_clients(id))";
        $db->exec($sql);
    };