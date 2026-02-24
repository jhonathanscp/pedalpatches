<?php
declare(strict_types = 1)
;

namespace App\Models;
use App\Config\Database;
use PDO;

class Pedal
{
    private PDO $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    public function searchPedal(string|int $id): array
    {
        $sql = "SELECT * FROM pedals WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(":id", $id);

        $stmt->execute();

        return $stmt->fetch();
    }

    public function registerNewPedal(string|int $id, string $brand, string $model, string $releaseDate): void
    {
        $sql = "INSERT INTO pedals (id, brand, model, release_date) VALUES (:id, :brand, :model, :releaseDate)";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":brand", $brand);
        $stmt->bindValue(":model", $model);
        $stmt->bindValue(":releaseDate", $releaseDate);

        $stmt->execute();
    }



}