<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\User;
use Youdemy\App\Repositories\UserRepositorie;

class UserController {
    private $userRepositorie;

    public function __construct() {
        $this->userRepositorie = new UserRepositorie();
    }

   

}
?>