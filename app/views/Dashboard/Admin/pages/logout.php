<?php
// session_start();

session_unset();
session_destroy();

$_SESSION['success'] = "Vous etes déconnecté.";

header("/index.php?page=login");
exit();
?>