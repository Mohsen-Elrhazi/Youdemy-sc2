<?php 
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\Admin;
use Youdemy\Config\Database;
use PDO;

class AdminRepositorie {
    
    public function updateUserStatus($id, $status) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE user SET status = :status WHERE user_id = :id");
        $stmt->execute([
            ':status' => $status,
            ':id' => $id
        ]);
    }


        public function getUserById($id) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    
}
?>