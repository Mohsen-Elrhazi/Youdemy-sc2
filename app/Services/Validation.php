<?php 
namespace Youdemy\App\Services;

use Youdemy\Config\Database;
use PDO;

class validation{
    
    public static function validateFields($fields) {
        foreach ($fields as $field) {
            if(empty($field)) return false;
        }
        return true;
    }

    public static function columnExists($table, $column, $valueColumn, $id, $valueId){
        $conn= Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM {$table} WHERE {$column} = :valueColumn and {$id} <> :valueId");
        $stmt->execute([
            ':valueColumn' => $valueColumn,
            ':valueId' => $valueId
        ]);
        // return $stmt->fetchColumn();
        return $stmt->rowCount() >0;
    }
}

?>