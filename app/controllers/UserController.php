<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\User;
use Youdemy\App\Repositories\UserRepositorie;

class UserController {
    private $userRepositorie;

    public function __construct() {
        $this->userRepositorie = new UserRepositorie();
    }

    // afficher users
    public function afficherUsers() {
        $users = $this->userRepositorie->getAllUsers();
        return $users; 
    }

    public function rendreRow(User $user) {
        // initialisation des variables
        $action = '';
        $statusClass = '';
    
        // determiner l'action et la classe CSS selon le statut de user
        if ($user->getStatus() === 'active') {
            $action = 'Désactiver';
            $statusClass = 'btn-secondary';  
        } else {
            $action = 'Activer';
            $statusClass = 'btn-success';  
        }
    
        return "
            <tr>
                <td>" . $user->getUserID() . "</td>
                <td>" . $user->getUserName() . "</td>
                <td>" . $user->getEmail() . "</td>
                <td>" . $user->getRole() . "</td>
                <td>" . $user->getStatus() . "</td>
                <td>
                    <a class='btn $statusClass text-light text-decoration-none px-4 me-4' 
                       href='?page={$user->getRole()}&statusID={$user->getUserID()}'>
                        $action
                    </a>
                    <a class='btn btn-danger text-light text-decoration-none' 
                       href='?page={$user->getRole()}&delete={$user->getUserID()}'>
                        Delete
                    </a>
                </td>
            </tr>";
    }
    

    // function delete user
    public function deleteUser(){
        if(isset($_GET['delete']) && isset($_GET['page'])){
            $id=$_GET['delete'];
            $role= $_GET['page'];

        $this->userRepositorie->delete($id);
        if($role==='Etudiant'){
            $_SESSION['success']='Etudiant a été supprimer';
        }elseif($role==='Enseignant'){
            $_SESSION['success']='Enseignant a été supprimer';
        }
            header("location:/app/views/Dashboard/Admin/admin.php?page={$role}");
            exit;
    }
   }

}
?>