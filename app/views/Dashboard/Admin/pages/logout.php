<?php
session_unset();
session_destroy();

header("/index.php?page=login");
$_SESSION['success'] = "Vous etes déconnecté.";

exit();
?>