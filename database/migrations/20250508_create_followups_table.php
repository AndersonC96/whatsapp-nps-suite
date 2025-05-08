<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS followups (id INT AUTO_INCREMENT PRIMARY KEY, response_id INT, tipo ENUM('detractor', 'sem_resposta'), mensagem TEXT, agendado_para DATETIME,enviado BOOLEAN DEFAULT FALSE, enviado_em DATETIME, FOREIGN KEY (response_id) REFERENCES responses(id))";
        $db->exec($sql);
    };