<?php 
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\User;
use Youdemy\Config\Database;



class UserRepositorie{
   
    public function save(User $user){
        $conn=DataBase::getConnection();
        $stmt=$conn->prepare("INSERT into user(username, email, password) VALUES(:username, :email,:password)");
        $stmt->execute([
            ':username' =>$user->getUserName(),
            ':email' =>$user->getEmail(),
            ':password'=>$user->getPassword(),

        ]);
    }

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
                  
                 $user=new User($name, $email,$role, $passwordHached, "inactive");
                  $this->save($user);
                echo "<div class='alert alert-success text-center'>Vous etes enregistrer avec succes</div>";
                }     
            }
        }
    }

    
    // public function displayAll() {
    //     $conn = Database::getConnection();
    //     $stmt = $conn->prepare("SELECT userID, username, email, role, status  FROM users where role='client' ");
    //     $stmt->execute(); 
    //     $data = [];
    //     $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //     foreach ($users as $user) {
    //         $data[] = new User($user['username'], $user['email'], null, $user['userID'], $user['role'], $user['status']);

    //     }
    //     return $data;
    // }

    // public function rendreRow(User $user) {

    //     return "<tr>
    //                 <td>".$user->getUserName()."</td>
    //                 <td>" . $user->getEmail(). "</td>
    //                 <td>" .$user->getRole(). "</td>
    //                 <td class='status'>" .$user->getStatus(). "</td>
    //                 <td>
    //                 <a class='status-btn btn btn-success text text-light text-decoration-none' href='?page=client&id=".$user->getUserID()."&status=".$user->getStatus()."' )' >Activer</a>
    //                 </td>
    //            </tr>";
    //     } 
        

    //     public function changerStatus($id){
    //         $conn=Database::getConnection();
            
    //         $stmt=$conn->prepare("select status from users where userID=:id ");
    //         $stmt->execute([
    //         ':id'=> $id,
    //         ]);
            
    //          //recuperer le resultat
    //         $client=$stmt->fetch(PDO::FETCH_ASSOC);
            
    //         if($client['status']==='active'){
    //         $stmt=$conn->prepare("update users set status= :status where userID=:id ");
    //         $stmt->execute([
    //         ':status'=> 'inactive',
    //         ':id'=> $id,
    //         ]);
    //        }else{
    //         $stmt=$conn->prepare("update users set status= :status where userID=:id ");
    //         $stmt->execute([
    //         ':status'=> 'active',
    //         ':id'=> $id,
    //         ]);
    //        }
    //     }

}

?>