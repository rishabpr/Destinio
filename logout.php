<?php
session_start();
session_unset($_SESSION['user']);
session_unset($_SESSION['type']);
session_destroy();
header('location:user_home.php');
?>