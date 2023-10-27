
<?php
session_start();
if(!$_SESSION['email']){
    header('location:../login.php');
}

error_reporting(0);
ini_set('display_errors', 0);
include('includes/header.php');
include('includes/content.php');
include('includes/footer.php');
?>