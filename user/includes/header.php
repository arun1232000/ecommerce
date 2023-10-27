
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Commerce Store</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1ad0c63704.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<style>
    * {
        font-family: Tahoma, Verdana, sans-serif;
        scroll-behavior: smooth;
}
    </style>
<body>
    
  
 
    <!-- Navbar -->
    
    <nav class=" navbar-expand-lg navbar navbar-light fixed-top" style="background-color: #fff;">
        <div class="container">
            <a class="navbar-brand" href="#">E-Commerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=landing">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=products">Products</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="?page=cat-products">product list</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="?page=product-cart"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=my_orders">My Orders</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="?page=change-password">Change Password</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Log out</a>
                    </li> -->
                    <li>
                    <form class="form-inline my-2 my-lg-0" method="POST" action="index.php?page=search_bar">
                   <input class="form-control mr-sm-2" type="search" name="search_val" placeholder="Search" aria-label="Search">
                   <a href="?page=search_bar"><button class="btn btn-outline-success my-2 my-sm-0"  name="search" type="submit"><i class="fas fa-search"></i></button></a>
                   </form>
                   </li>
                   
<!-- <div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div> -->
                    <li class="text-light ml-3"></li>
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown " href="#" id="navbarDropdown"  data-toggle="dropdown" >
            <?php
            include('../connection.php');
           


            $email=$_SESSION['email'];
            $sql="select * from user where email='$email'";
            $result=mysqli_query($connection,$sql);
            $row=mysqli_fetch_assoc($result);
            ?>
        <img src="./<?php echo $row['profile_pic'];?>" height="30px" width="30px" style="border-radius:15px;margin-top:0;">
        </a>
        <div class="dropdown-menu text-light" >
        <a class="dropdown-item" href="?page=profile"><i class="fas fa-user-alt pe-2"></i> <small>My Account</small></a>
          <a class="dropdown-item" href="?page=change-password"><i class="fa-solid fa-lock"></i> <small>Change Password</small></a>
          <a class="dropdown-item" href="../logout.php"><i class="fas fa-door-open pe-2"></i> <small>Log out</small></a>
         
        </div>
      </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- ./products/search_bar.php -->
   