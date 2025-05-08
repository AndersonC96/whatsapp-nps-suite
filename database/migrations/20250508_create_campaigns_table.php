<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS campaigns (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(150), template_id INT, agendamento DATETIME, criado_por INT, criado_em DATETIME DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY (template_id) REFERENCES templates(id), FOREIGN KEY (criado_por) REFERENCES users(id))";
        $db->exec($sql);
    };