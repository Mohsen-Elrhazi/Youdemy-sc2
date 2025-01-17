<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\User;
use Youdemy\App\Repositories\UserRepositorie;

class UserController {
    private $userRepositorie;

    public function __construct() {
        $this->userRepositorie = new UserRepositorie();
    }

    public function showRegisterForm() {
        require_once 'app/views/Auth/register.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'  && isset($_POST['register'])) {
            $name = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $role = htmlspecialchars($_POST['role']);

            if ($this->validateFields($name, $email, $role, $password)) {
                if ($this->userRepositorie->emailExists($email)) {
                    $_SESSION['error'] = "Cet email est déjà utilisé.";
                    header("Location: ../../../../index.php?page=register");
                    exit;
                }

                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $user = new User($name, $email, $role, $hashedPassword, "inactive");

                $this->userRepositorie->save($user);

                $_SESSION['success'] = "Vous êtes inscrit avec succès!";
                header("Location: ../../../../index.php?page=login");
                exit;
            } else {
                $_SESSION['error'] = "Veuillez remplir tous les champs correctement.";
                header("Location: ../../../../index.php?page=register");
                exit;
            }
        }
    }

    // Fonction de validation des champs
    private function validateFields($name, $email, $role, $password) {
        return !empty($name) && !empty($email) && !empty($role) && !empty($password);
    }

    public function showLoginForm() {
        require_once 'app/views/Auth/login.php';
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
            $email=htmlspecialchars($_POST['email']);
            $password=htmlspecialchars($_POST['password']);
        }
    }

    private function validateFields($email, $password) {
        return !empty($email) && !empty($password);
    }


}
?>