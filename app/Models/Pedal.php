<?php
namespace App\Models;
use App\Config\Database;

class Pedal{
    private $connection;

    public function __construct() {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    public function searchPedal($id) {
        $sql = "SELECT * FROM pedals WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(":id", $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}