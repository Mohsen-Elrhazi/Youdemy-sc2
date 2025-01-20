<?php
if (session_status() === PHP_SESSION_NONE) {
session_start();
}

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'Enseignant') {
$_SESSION['error'] = "Vous devez être connecté en tant qu'enseignant pour accéder à ce page.";
header("Location:/index.php?page=login");
exit();
}
?>