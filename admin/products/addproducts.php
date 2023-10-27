<?php
include('connection.php');

if(isset($_POST['submit'])){
   

  $cid=$_POST['category_name'];
  $pname=$_POST['pname'];
  $description=$_POST['description'];
  $price=$_POST['price'];
  $image=$_FILES['image']['name'];
  $image_tmp=$_FILES['image']['tmp_name'];

  if(move_uploaded_file($image_tmp,$image)){
  $sql="insert into products (pname,description,price,image,cid) values ('$pname','$description',$price,'$image',$cid)";
  $result=mysqli_query($connection,$sql);
  if($result){
    header('location:?page=manageproducts');
   
  }
  else{
    echo"error";
  }

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
    <div class="container mt-5 p-3">
    <h2 style="text-align:center;">Add Products</h2>
 
    
  <form enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"> Product Category </label><br>
    <select class="form-control" name="category_name">
    <option selected>Select Category</option>
      <?php
      $sql="select * from categories";
      $result=mysqli_query($connection,$sql);
      
      while($row=mysqli_fetch_assoc($result)){
        
        echo"<option class='text-dark' value={$row['cid']}>{$row['category_name']}</option>";
      
      }
      
      ?>
  
</select>
    
  </div>
    
  <div class="form-group">
    <label for="exampleInputEmail1"> product name</label>
    <input type="text" class="form-control"  placeholder="Enter product name" name="pname">
    
  </div>
  <div class="form-group">
    <label > descripton</label>
    <input type="text" class="form-control"  placeholder="Enter descripttion" name="description">
    
  </div>
  <div class="form-group">
    <label >product price</label>
    <input type="text" class="form-control"  placeholder="Enter product price" name="price">
    
  </div>
  <div class="form-group">
    <label>enter image</label>
    <input type="file" class="form-control"  placeholder="Enter product image" name="image">
    
  </div>

 
  <button type="submit" class="btn btn-success" name="submit">Save</button>
  <a class="text-light" href="?page=manageproducts">
  <button class="btn btn-danger" >Cancel</button></a>

</form>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
