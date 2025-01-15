<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\User;
use Youdemy\Config\Database;

class AuthController{
    public function register(){
        if (isset($_POST['register'])){
            $name=htmlspecialchars($_POST['username']);
            $email=htmlspecialchars($_POST['email']);
            $password=htmlspecialchars($_POST['password']);
            $role=htmlspecialchars($_POST['role']);
            
            $passwordHached=password_hash($password,PASSWORD_DEFAULT);

            if(empty($name) || empty($email) || empty($role) || empty($password)){
                echo "<div class='alert alert-danger text-center'>Veuillez remplir tous les champs</div>";
            }else{
                $conn=Database::getConnection();

                $stmt=$conn->prepare("select * from user where email = :email");
                $stmt->execute([
                    ':email'=> $email
                ]);
                if($stmt->rowCount()> 0){
            echo "<div class='alert alert-danger text-center'>Cet email est déja utilisé</div>";
                }else{
                    $userController=new UserController();
                    $user=new User($name, $email,$role, $passwordHached);
                    $userController->save($user);
                echo "<div class='alert alert-success text-center'>Vous etes enregistrer avec succes</div>";
                }     
            }
        }
    }
}
?>