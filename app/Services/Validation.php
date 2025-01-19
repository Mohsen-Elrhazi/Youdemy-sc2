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

    public static function columnExists($table, $column, $value){
        $conn= Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM {$table} WHERE {$column} = :value");
        $stmt->execute([':value' => $value]);
        return $stmt->fetchColumn();
    }
}

?>