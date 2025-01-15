<?php 
namespace Youdemy\App\Models;

class User{
    private $userID;
    private $username;
    private $email;
    private $role;
    private $password;


    public function __construct($username, $email, $role, $password, $userID=null){
        $this->userID=$userID;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
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
    
}

?>