<?php
declare(strict_types=1);

namespace App\Models;
use App\Config\Database;
use PDO;

class Pedal{
    private PDO $connection;

    public function __construct() {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    public function searchPedal(string|int $id): array {
        $sql = "SELECT * FROM pedals WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(":id", $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}