<?php 
namespace Youdemy\App\Models;

class Admin extends User{
    
    public function __construct($username, $email, $role, $status, $password=null,$userID=null){
        parent::__construct($username, $email, $role, $status, $password=null,$userID=null);
    }
}
?>