<?php
include('connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from user where uid=$id";
    $result=mysqli_query($connection,$sql);
    if($result){
        header('location:?page=manageusers');
    }
    else{
        die(mysqli_error($connection));
    }
}
?>