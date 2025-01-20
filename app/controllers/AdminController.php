<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\Admin;
use Youdemy\App\Repositories\AdminRepositorie;

class AdminController {
    private $adminRepositorie;

    public function __construct() {
        $this->adminRepositorie = new AdminRepositorie();
    }

    public function updateStatus($id) {
        $user = $this->adminRepositorie->getUserById($id);
        
        // Vérifier l'état actuel du statut
        $currentStatus = $user['status']; // 'active' ou 'inactive'
        
        // Définir le nouveau statut
        if ($currentStatus === 'active') {
            $newStatus = 'inactive';
            $_SESSION['success'] = 'L\'utilisateur a été désactivé';
        } else {
            $newStatus = 'active';
            $_SESSION['success'] = 'L\'utilisateur a été activé';
        }
    
        // Mettre à jour le statut dans la base de données
        $this->adminRepositorie->updateStatus($id, $newStatus);
    
        // Rediriger vers la page de gestion des utilisateurs
        header("Location: /app/views/Dashboard/Admin/admin.php?page=Etudiant");  // ou selon votre rôle
        exit;
    }
    

}
?>