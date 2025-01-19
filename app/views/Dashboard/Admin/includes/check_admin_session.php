<?php
if (session_status() === PHP_SESSION_NONE) {
session_start();
}

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'Admin') {
$_SESSION['error'] = "Vous devez être connecté en tant qu'admin pour accéder à ce page.";
header("Location:/index.php?page=login");
exit();
}
?>