<?php

namespace Youdemy\App\Repositories;

use Youdemy\Config\Database;
use PDO;

abstract class BaseRepositorie {

    protected $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    abstract public function save(object $object);

    abstract public function edit(object $object);

    abstract public function delete(int $id);

    abstract public function display();

    abstract public function findById(int $id);
    
    abstract public function nameExists(string $name);
}
?>