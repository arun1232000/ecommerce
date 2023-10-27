<?php
include('connection.php');

// <script>alert('haeirfk3f')</script>";

$sql="select * from products where cid=1";
$result=mysqli_query($connection,$sql);
$data=array();

while($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
}
echo json_encode($data);

?>