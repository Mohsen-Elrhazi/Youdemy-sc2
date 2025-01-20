<?php
if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger text-center'>".$_SESSION['error']."</div>";
    unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
    echo "<div class='alert alert-success text-center'>".$_SESSION['success']."</div>";
    unset($_SESSION['success']);
}

if (isset($_SESSION['deleted'])) {
    echo "<div class='alert alert-success text-center'>".$_SESSION['deleted']."</div>";
    unset($_SESSION['deleted']);
}

if (isset($_SESSION['tagDeleted'])) {
    echo "<div class='alert alert-success text-center'>".$_SESSION['tagDeleted']."</div>";
    unset($_SESSION['tagDeleted']);
}
?>