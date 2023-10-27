<?php
include('connection.php');
$cid=$_GET['cid'];
// echo"
// <script>alert('haeirfk3f')</script>";

$sql="select * from products join categories on categories.cid=products.cid where categories.cid=$cid";
$result=mysqli_query($connection,$sql);
$data=array();

while($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
}
echo json_encode($data);

?>