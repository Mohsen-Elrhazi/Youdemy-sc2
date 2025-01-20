<?php

use Youdemy\App\Controllers\UserController;
use Youdemy\App\Controllers\AdminController;
use Youdemy\App\Models\User;

$userController = new UserController();
$adminController = new AdminController();


$userController->deleteUser();

$adminController->updateStatus();

$users = $userController->afficherUsers();


?>
<table class="table table-bordered mt-2 text-center align-middle">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($users as $user){
            if($user->getRole()==='Etudiant'){
                echo $userController->rendreRow($user);
            }
        }
          ?>
    </tbody>
</table>