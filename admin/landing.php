<?php
$connection=new mysqli("localhost","root","","register");
if(!$connection){
    
 echo"connection failed";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Admin Dashboard</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for the dashboard */
        .dashboard-card {
          background: linear-gradient(to right, #022769, #380d66);
           color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
        .dashboard-card:hover{
          background: #022769;
        
        }
    </style>
</head>
<body>
  
  <div class="container-fluid mt-4" style="background: url('bga.jpg') no-repeat center center fixed;
            background-size: cover; height:350px;">
<div class="container mt-5 p-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 admin-content text-light">
            <h1 class="text-center ">Welcome to Admin Dashboard</h1>
            <p class="text-center">Manage your data, orders, and more.</p>
            <div class="d-flex mt-3" style="display:flex;justify-content:center;">
            <button class="btn btn-secondary">Learn More</button>
      </div>
            
        </div>
    </div>
</div>
</div>
<div class="container-fluid mt-3  ">
    <div class="row">
        <div class="col-lg-4" >
          <a class="text-light" href="?page=manageproducts" style="text-decoration:none;">
        <div class="dashboard-card" >
                <h3>Products</h3>
                <?php
                $sql="SELECT COUNT(*) FROM products";
                $result=mysqli_query($connection,$sql);
                $row = mysqli_fetch_array($result);
                echo "<h4>$row[0]</h4>";
                ?>
            </div>
      </a>
        </div>
        <div class="col-lg-4">
        <a class="text-light" href="?page=manageusers" style="text-decoration:none;">
        <div class="dashboard-card" >
                <h3>Customers</h3>
                <?php
                $sql="SELECT COUNT(*) FROM user";
                $result=mysqli_query($connection,$sql);
                $row = mysqli_fetch_array($result);
                echo "<h4>$row[0]</h4>";
                ?>
            </div>
      </a>
        </div>
        <div class="col-lg-4">
        <a class="text-light" href="?page=orders" style="text-decoration:none;">
        <div class="dashboard-card" >
                <h3>Orders</h3>
                <?php
                $sql="SELECT COUNT(*) FROM orders";
                $result=mysqli_query($connection,$sql);
                $row = mysqli_fetch_array($result);
                echo "<h4>$row[0]</h4>";
                ?>

            </div>
      </a>
        </div>
    </div>
</div>

<!-- Footer -->


<!-- Add Bootstrap and jQuery JavaScript links at the end of the body -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

            
