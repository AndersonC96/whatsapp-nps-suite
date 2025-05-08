<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS responses (id INT AUTO_INCREMENT PRIMARY KEY, campaign_id INT, client_id INT, nota INT CHECK (nota BETWEEN 0 AND 10), comentario TEXT,recebido_em DATETIME, FOREIGN KEY (campaign_id) REFERENCES campaigns(id), FOREIGN KEY (client_id) REFERENCES clients(id))
    \";
    $db->exec($sql);
};