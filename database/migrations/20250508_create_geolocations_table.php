<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS geolocations (id INT AUTO_INCREMENT PRIMARY KEY, client_id INT, latitude DECIMAL(10,8), longitude DECIMAL(11,8), atualizado_em DATETIME,FOREIGN KEY (client_id) REFERENCES clients(id))";
        $db->exec($sql);
    };