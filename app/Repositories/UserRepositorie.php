<?php 
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\User;
use Youdemy\Config\Database;
use PDO;

class UserRepositorie {
   
    public function save(User $user) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO user (username, email,  role, password, status) VALUES (:username, :email, :role, :password,  :status)");
        $stmt->execute([
            ':username' => $user->getUserName(),
            ':email' => $user->getEmail(),
            ':role' => $user->getRole(),
            ':password' => $user->getPassword(),
            ':status' => $user->getStatus()
        ]);
    }

    public function emailExists($email) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->rowCount() > 0;
    }

    public function updateStatus($userId, $status) {
        $stmt = $this->db->prepare("UPDATE user SET status = :status WHERE id = :id");
        return $stmt->execute([
            ':status' => $status,
            ':id' => $userId
        ]);
    }

    public function getUserByEmail($email) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    
}
?>