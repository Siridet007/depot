<?php 
    session_start();
    unset($_SESSION['user1_login']);
    unset($_SESSION['user2_login']);
    unset($_SESSION['user3_login']);
    unset($_SESSION['admin_login']);
    header('location: loginform.php');
?>