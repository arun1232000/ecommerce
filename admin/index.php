<?php
session_start();
if($_SESSION['user_type']){
    echo"";
}
else{
    header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <style>
    *{
        background: black;
    }
    </style> -->
<body>

<?php
error_reporting(E_ALL & ~E_NOTICE);

    include 'includes/header.php'; 
    
    
    include 'includes/content.php';
    
    include 'includes/footer.php'; 
    ?>
    
    
</body>
</html>