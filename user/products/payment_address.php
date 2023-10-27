<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
if(!$_SESSION['cart']){
    ?>
        <script>
            alert('Your cart is empty');
        window.location.href = "index.php?page=product-cart";
        </script>
    <?php
}

$_SESSION['email'];
include('connection.php');
if($_SESSION['cart']){
if(isset($_POST['submit'])){
    $full_name=$_POST['full_name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $phone=$_POST['phone'];
    $email=$_SESSION['email'];
    $sql="update user set full_name='$full_name',address='$address',city='$city',state='$state',zip='$zip',phone='$phone' where email='$email'";
    $result=mysqli_query($connection,$sql);
    if($result){
        ?>
        <script>
        window.location.href = "index.php?page=payment_form";
        </script>
       <?php
    }
   else{
    echo"<script>alert('Some error occured');</script>";
   }
    
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Purchase</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
       
      .custom-background {
            background-image: url('./products/bg1.jpg');
            
            background-size: cover; 
           
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-color: rgb(255 255 255 / 0.3);
          
            color: white;
        }
        form{
            backdrop-filter: blur(20px);
        }
    </style>
<body>
<div class="container-fluid custom-background mt-5">
    <div class="container mt-5 p-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                
                <?php
                $sq="select * from user where email='{$_SESSION['email']}'";
                $res=mysqli_query($connection,$sq);
                $row=mysqli_fetch_assoc($res);
               
                
                ?>
                <form action="" method="POST">
                  
                    <h4 class="mb-3">Shipping Address</h4>
                    <div class="mb-3">
                        <label for="shipping_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="shipping_name" name="full_name" value="<?php echo $row['full_name'];?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="shipping_address" name="address" value="<?php echo $row['address'];?>" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="shipping_city" class="form-label">City</label>
                            <input type="text" class="form-control" id="shipping_city" name="city" value="<?php echo $row['city'];?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="shipping_state" class="form-label">State</label>
                            <input type="text" class="form-control" id="shipping_state" name="state" value="<?php echo $row['state'];?>" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_zip" class="form-label">ZIP Code</label>
                        <input type="text" class="form-control" id="shipping_zip" name="zip" value="<?php echo $row['zip'];?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="shipping_phone" name="phone" value="<?php echo $row['phone'];?>" required>
                    </div>
                    
           
                   
                    
                    <button type="submit" class="btn btn-primary" name="submit">Complete Purchase</button>
                </form>
            </div>
        </div>
    </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
