<?php
    namespace Core;
    use PDO;
    use PDOException;
    class Database {
        public static function connect() {
            $host = Env::get('DB_HOST');
            $port = Env::get('DB_PORT');
            $dbname = Env::get('DB_DATABASE');
            $username = Env::get('DB_USERNAME');
            $password = Env::get('DB_PASSWORD');
            $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";
            try {
                return new PDO($dsn, $username, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }
    }