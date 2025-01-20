<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\User;
use Youdemy\App\Repositories\UserRepositorie;
use Youdemy\App\Services\Validation;

class AuthController {
    private $userRepositorie;

    public function __construct() {
        $this->userRepositorie = new UserRepositorie();
    }

    public function showRegisterForm() {
        require_once 'app/views/Auth/register.php';
    }

    public function register() {
            $name = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $role = htmlspecialchars($_POST['role']);

            if (Validation::validateFields([$name, $email, $role, $password])) {
                if ($this->userRepositorie->emailExists($email)) {
                    $_SESSION['error'] = "Cet email est déjà utilisé.";
                    header("Location: ../../../../index.php?page=register");
                    exit;
                }else{

                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $user = new User($name, $email, $role,"inactive", $hashedPassword );

                $this->userRepositorie->save($user);

                header("Location: ../../../../index.php?page=login");
                $_SESSION['success'] = "Vous êtes inscrit avec succès!";
                exit;
                }
            } else {
                $_SESSION['error'] = "Veuillez remplir tous les champs correctement.";
                header("Location: ../../../../index.php?page=register");
                exit;
            }
    }


    public function showLoginForm() {
        require_once 'app/views/Auth/login.php';
    }

    public function login(){
            $email=htmlspecialchars($_POST['email']);
            $password=htmlspecialchars($_POST['password']);

            if(Validation::validateFields([$email, $password])){
              $user= $this->userRepositorie->getUserByEmail($email);
               
              if($user){
                if(password_verify($password, $user['password'])){
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['status'] = $user['status'];
                    
                    switch ($user['role']) {
                        case 'Admin':
                            header("location: ../../../../index.php?page=admin");
                            exit();
                    
                        case 'Enseignant':
                            if ($user['status'] === 'active') {
                                header("location: ../../../../index.php?page=enseignant");
                                exit();
                            } else {
                                $_SESSION['error'] = 'Votre compte a été désactivé';
                                header("Location: ../../../../index.php?page=login");
                                exit();
                            }
                    
                        case 'Etudiant':
                            if ($user['status'] === 'active') {
                                header("location: ../../../../index.php?page=platform");
                                exit();
                            } else {
                                $_SESSION['error'] = 'Votre compte a été désactivé';
                                header("Location: ../../../../index.php?page=login");
                                exit();
                            }
                    
                        default:
                            $_SESSION['error'] = 'Rôle ou statut invalide.';
                            header("Location: ../../../../index.php?page=login");
                            exit();
                    }
                    
                   
                }else{
                    $_SESSION['error']= 'Mot de pass incorrect';
                header("Location: ../../../../index.php?page=login");
                }
              }else{
               $_SESSION['error']='Aucun utilisateur trouvé avec cet email'; 
               header("Location: ../../../../index.php?page=login");
              }
            }else{
               $_SESSION['error']='Veuiller remplir tous les champs'; 
               header("Location: ../../../../index.php?page=login");
            }
    }

  


}
?>