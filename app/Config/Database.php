<?php
declare(strict_types=1);

namespace App\Config;

use PDO;
use PDOException;

class Database {
    private string $host;
    private string $db_name;
    private string $username;
    private string $password;
    public PDO|null $connection;

    public function __construct(){
        $this->host = $_ENV["DB_HOST"];
        $this->db_name = $_ENV["DB_NAME"];
        $this->username = $_ENV["DB_USER"];
        $this->password = $_ENV["DB_PASS"];
    }

    public function getConnection(): PDO{
        $this->connection = null;

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;

            $this->connection = new PDO($dsn, $this->username, $this->password);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            echo "Erro de conexão " . $exception->getMessage();
        }

        return $this->connection;
    }
}