<?php 
namespace Youdemy\App\Models;

class Admin extends User{
    
    public function __construct($username, $email, $status, $password=null,$userID=null){
        parent::__construct($username, $email, 'Admin', 'active', $password=null,$userID=null);
    }
}


?>