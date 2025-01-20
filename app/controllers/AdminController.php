<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\Admin;
use Youdemy\App\Repositories\AdminRepositorie;

class AdminController {
    private $adminRepositorie;

    public function __construct() {
        $this->adminRepositorie = new AdminRepositorie();
    }


    public function updateStatus() {
        if(isset($_GET['statusID'])){
            $id=$_GET['statusID'];
         
        $user = $this->adminRepositorie->getUserById($id);

        if (!$user) {
            $_SESSION['error'] = "Utilisateur introuvable.";
            header("Location: /index.php?page=admin");
            exit;
        }

        $currentStatus = $user['status']; 
        $role=$user['role'];
        
        if ($currentStatus === 'active') {
            if($role==='Enseignant'){
             $_SESSION['success'] = 'Enseignant a été désactivé';
            }elseif($role==='Etudiant'){
             $_SESSION['success'] = 'Etudiant a été désactivé';
            }
            $newStatus = 'inactive';
           
        } else {
            if($role==='Enseignant'){
                $_SESSION['success'] = 'Enseignant a été activé';
               }elseif($role==='Etudiant'){
                $_SESSION['success'] = 'Etudiant a été activé';
               }
            $newStatus = 'active';
        }

        $this->adminRepositorie->updateUserStatus($id, $newStatus);
        header("Location: /app/views/Dashboard/Admin/admin.php?page={$role}");  
        exit;
    }
    }
    

    

}
?>