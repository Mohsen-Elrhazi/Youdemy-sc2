<?php 
namespace Youdemy\App\Models;

class User{
    private $userID;
    private $username;
    private $email;
    private $role;
    private $password;
    private $status;


    public function __construct($username, $email, $role, $password, $status){
        $this->userID=$userID;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
        $this->status=$status;
    }
 

    public function getUserID(){
        return $this->userID;
    }

    public function getUserName(){
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getRole(){
        return $this->role;
    }

    public function getStatus(){
        return $this->status;
    }
    
    
}


?>