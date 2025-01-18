<?php

namespace Youdemy\App\Repositories;

use Youdemy\Config\Database;
use PDO;

abstract class BaseRepository {

    protected $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    abstract public function save(object $object);

    abstract public function edit(object $object);

    abstract public function delete(int $id);

    abstract public function display();

    // Methode abstraite pour trouver un objet par son ID
    // abstract public function findById($id);
}
?>