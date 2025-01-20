<?php 
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\User;
use Youdemy\Config\Database;
use PDO;

class UserRepositorie {
   
    public function save(User $user) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO user (username, email, role, status, password ) VALUES (:username, :email, :role, :status, :password)");
        $stmt->execute([
            ':username' => $user->getUserName(),
            ':email' => $user->getEmail(),
            ':role' => $user->getRole(),
            ':status' => $user->getStatus(),
            ':password' => $user->getPassword()
        ]);
    }

    public function emailExists($email) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->rowCount() > 0;
    }

    public function getUserByEmail($email) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getAllUsers() {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM user where role <> 'admin' ");
        $stmt->execute(); 
        $dataUsers = [];
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $dataUsers[] = new User($user['username'],$user['email'], $user['role'],$user['status'],$user['password'],$user['user_id'] );
        }
        return $dataUsers;
    }

    // delete user
    public function delete($id) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM user WHERE user_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

}
?>