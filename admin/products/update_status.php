<?php
include('connection.php');
if($_GET['status_id']){
    $id=$_GET['status_id'];
    $sql="update orders set order_status='shipped' where order_id=$id";
    $result=mysqli_query($connection,$sql);
    if($result){
        header('location:?page=orders');
    }
    else{
        echo"";
    }
}
?>