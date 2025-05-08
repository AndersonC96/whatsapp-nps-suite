<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS csat_scores (id INT AUTO_INCREMENT PRIMARY KEY, client_id INT, campaign_id INT, nota INT CHECK (nota BETWEEN 1 AND 5), comentario TEXT, criado_em DATETIME DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY (client_id) REFERENCES clients(id), FOREIGN KEY (campaign_id) REFERENCES campaigns(id))";
        $db->exec($sql);
    };