<?php
include('connection.php');
$id=$_GET['deleteid'];
$sql="delete from products where id=$id";
$result=mysqli_query($connection,$sql);
if($result){
    header('location:?page=manageproducts');
}
else{
    echo"error";
}
?>