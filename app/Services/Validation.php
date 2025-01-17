<?php 
namespace Youdemy\App\Services;

class validation{
    
    public static function validateFields($fields) {
        foreach ($fields as $field) {
            if(empty($field)) return false;
        }
        return true;
    }
}
// validation::validateFields($fields);

?>