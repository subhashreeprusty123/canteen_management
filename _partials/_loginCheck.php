<?php
session_start();
if(!(isset($_SESSION['user_id']) && isset($_SESSION['user_type']))){
    header('location:login.php');
}
?>
