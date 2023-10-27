<?php
include('connection.php');
$sql = " select * from products join categories on products.cid=categories.cid";
$result = mysqli_query($connection, $sql);
?>
<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 

    <title>Manage Product</title>

  </head>

  <div class="container mt-5 p-2 mb-5">
  <h2 style="text-align:center;">All Products</h2>
    
     <div class="container mt-2 " style="display:flex;justify-content:right;">
     <a href='?page=addproducts' class='text-light'>
     <button type='submit' class='btn btn-primary text-right' name='submit'>Add Products</button></a>
     
     </div>
     <table class="table mt-5 p-5" style="border:1px solid black;">

  <thead>

   

    <tr style="background:#699bc9;color:white;border:1px solid black;">

      <th scope="col">ID</th>

      <th scope="col">product name</th>
      <th scope="col">category</th>
      <th scope="col">description</th>

      <th scope="col">price</th>

      <th scope="col">image</th>
      <th scope="col">operations</th>

    </tr>

 

  </thead>

  <tbody>

  <?php

    while($row=mysqli_fetch_assoc($result)){

    echo"<tr>

      <td>{$row['id']}</td>

      <td>{$row['pname']}</td>
      <td>{$row['category_name']}</td>

      <td>{$row['description']}</td>

      <td>{$row['price']}</i></td>

      <td><img src='{$row['image']}' height='100px' width='100px'></td>

      <td><a href='?page=update_products&updateid={$row['id']}' class='text-light'>
      <button type='submit' class='btn btn-primary' name='submit' style='width:80px;'>Edit</button></a><br><br>
      <a href='?page=delete_products&deleteid={$row['id']}' class='text-light'>
      <button type='submit' class='btn btn-danger' name='submit' style='width:80px;'>Delete</button></a>
      </td>
    </tr>";

    }

 

  ?>  

    <!--<tr>

      <th scope="row">2</th>

      <td>Jacob</td>

      <td>Thornton</td>

      <td>@fat</td>

    </tr>

    <tr>

      <th scope="row">3</th>

      <td>Larry</td>

      <td>the Bird</td>

      <td>@twitter</td>

    </tr>-->

  </tbody>

</table>

</div>

 

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>