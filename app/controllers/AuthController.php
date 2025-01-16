<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\User;
use Youdemy\Config\Database;

class AuthController{

        public function login() {
            require_once 'app/Views/Auth/login.php';
        }
    
        public function register() {
            require_once 'app/Views/Auth/register.php';
        }
}
?>