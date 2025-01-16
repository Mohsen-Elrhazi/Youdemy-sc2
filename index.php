<?php
$page=$_GET['page'];

switch ($page) {
    case 'register':
         include 'app/views/Auth/register.php';
    break;
    case 'login':
        include 'app/views/Auth/login.php';
    break;
    case 'platform':
        include 'app/views/Platform/platform.php';
    break;
    default:
    echo "page introuvable";
    break;
}
?>