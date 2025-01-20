<?php 
namespace Youdemy\App\Models;

class Enseignant extends User{

    public function __construct($username, $email, $role, $password, $status,$userID=null){
        parent::__construct($username, $email, $role, $password, $status);
    }

}
?>