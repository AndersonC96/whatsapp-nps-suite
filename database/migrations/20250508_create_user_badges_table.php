<?php
    use Core\Database;
    return function () {
        $db = Database::connect();
        $sql = "CREATE TABLE IF NOT EXISTS user_badges (id INT AUTO_INCREMENT PRIMARY KEY, user_id INT, badge_id INT, concedido_em DATETIME DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY (user_id) REFERENCES users(id), FOREIGN KEY (badge_id) REFERENCES badges(id))";
        $db->exec($sql);
    };