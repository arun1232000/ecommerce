<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operations</title>
    
</head>
<body>
  <div class="container mt-5">
<h2 style="text-align:center;">All customers</h2>
</div>
    <div class="container mt-3 p-5">
    
    
<table class="table" style="border:1px solid black;">
  <thead>
    <tr style="background:#699bc9;color:white;border:1px solid black;">
      <th scope="col">Customer ID</th>
      <th scope="col">Username</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      
      <th scope="col">operations</th>
    </tr>
  </thead> 
  <tbody>
    <?php
    $sql="select * from user where uid<>4";
    $result=mysqli_query($connection,$sql);
    if($result){
    while($row=mysqli_fetch_assoc($result)){
        echo'<tr>
        <th scope="row">'.$row['uid'].'</th>
        <td>'.$row['username'].'</td>
        <td>'.$row['full_name'].'</td>
        <td>'.$row['email'].'</td>
       
        
        <td> <a href="?page=update_user&updateid='.$row['uid'].'"  class="text-light"><button class="btn btn-primary">Update</button></a>
        
        <a href="?page=delete_user&deleteid='.$row['uid'].'" class="text-light">
        <button class="btn btn-danger">Delete</button></a></td>
      </tr>';
    }
}
  
    ?>

    
  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>