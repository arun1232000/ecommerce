<?php
include('connection.php');
$email=$_SESSION['email'];

$sql = " select * from orders where user_email='$email'";
$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-3 p-4">
    <div class="container mt-5 p-5">
        <h2 class="mb-4" style="text-align:center;">My Orders</h2>

        <!-- Order List -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead style="background:#699bc9;color:white;">
                    <tr>
                        <th>Order ID</th>
                        <th> Order Date</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>image</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  while($row=mysqli_fetch_assoc($result)){

                  
                    echo"<tr>";
                      
                        echo"<td>{$row['order_id']}</td>";
                        $datetimeDB = "{$row['order_date']}"; 
                        $datetimeformat = new DateTime($datetimeDB);
                        $currentdatetime = $datetimeformat->format("H:i:s A d-m-Y");
                        echo"<td> $currentdatetime</td>";
                        echo"<td>{$row['pname']}</td>";
                       echo" <td>{$row['price']} <i class='fa-solid fa-indian-rupee-sign'></i></td>";
                       echo" <td><img src='../admin/{$row['image']}' height='50px' width='50px'></td>";
                       if($row['order_status']=='Processing'){
                        echo"<td><span class='badge badge-warning'>{$row['order_status']}</span></td>";
                       }else{
                       echo" <td><span class='badge badge-success'>{$row['order_status']}</span></td>";
                       }
                    echo"</tr>";
                  }
                   ?>
                    
                </tbody>
            </table>
        </div>

       
        
    </div>

    </div>

