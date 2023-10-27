<?php
include('connection.php');
$id=$_GET['updateid'];
$sql="select * from user where uid=$id";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['username'];
$email=$row['email'];

$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    
    $password=$_POST['password'];

    $sql="UPDATE user set id=$id,username='$name',email='$email',password='$password' where id=$id";
    $result=mysqli_query($connection,$sql);
   if($result){
    echo"<script>alert('updated succesfully')</script>";
    header('location:?page=manageusers');
   }
   else{
    die(mysqli_error($connection));
   }
     
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >

    <title>crud operations</title>
  </head>
  <body>
    <div class="container my-5 mt-5 p-5">
      <h3 style="text-align:center">Update User Details</h3>
    <form method="post" autocomplete="off">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  value=<?php echo $name?> name="username">
   </div>
   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  value=<?php echo $email?> name="email">
   </div>
 
   <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" value=<?php echo $password?> name="password" readonly>
   </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

    
  </body>
</html>