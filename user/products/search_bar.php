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
  <div class="container mt-5 p-2">
    <div class="row" id="products">
  <?php

include('connection.php');

if($_POST['search_val']){
    $search=$_POST['search_val'];
    $sql="select * from products join categories on products.cid=categories.cid where pname like '%$search%'";
    $result=mysqli_query($connection,$sql);
    if($result){
    while($row=mysqli_fetch_assoc($result)){
        echo"<div class='col-md-4'>
        <div class='container mt-5 ' id='product'>
            <div class='card shadow p-3 mb-5 bg-white rounded' style='width: 18rem;'>
                <img class='card-img-top' src='../admin/{$row['image']}' width='200px' height='200px' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>{$row['pname']}</h5>
                    <p class='card-text'>Price: {$row['price']} <i class='fa-solid fa-indian-rupee-sign'></i></p>
                    <a href='?page=product-cart&cartid={$row['id']}' class='text-light'>
                               <button type='submit' class='btn btn-primary' name='addto_cart'> Add to cart
                              </button></a>
                              <a href='?page=product_details&viewid={$row['id']}' class='text-light'>
                              <button type='submit' class='btn btn-success' name='addto_cart'> View
                              </button></a>
                </div>
            </div>
       </div>
    </div>";
    }
  }else{
    echo"<script>alert('no items to display')</script>";
  }
}
else{
    echo"<h1>no items to display</h1>";
}

    

   

?> 
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

  