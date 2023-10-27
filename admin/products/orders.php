<?php
include('connection.php');
$sql = "select * from orders join user on orders.user_email=user.email;";
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
  
  
    
     
     <table class="table mt-5 p-5" style="border:1px solid black;">
     <h2 style="text-align:center;">All Orders</h2>
  <thead>

   

    <tr style="background:#699bc9;color:white;border:1px solid black;">

      <th scope="col">Order ID</th>
      <th scope="col">Order Time</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer email</th>
      <th scope="col"> Shipping address</th>
      <!-- <th scope="col">Phone No</th> -->

      <th scope="col">product Name</th>

      <th scope="col">image</th>
      <th scope="col">Order Status</th>
      <th scope="col">Actions</th>
    

    </tr>

 

  </thead>

  <tbody >

  <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['order_id']}</td>";
                    $datetimeDB = "{$row['order_date']}"; 
                    $datetimeformat = new DateTime($datetimeDB);
                    $currentdatetime = $datetimeformat->format("H:i:s A d-m-Y");
                    echo "<td> $currentdatetime</td>";
                    echo "<td>{$row['full_name']}</td>";
                    echo "<td>{$row['user_email']}</td>";
                    echo "<td>{$row['address']}<br>{$row['city']}, {$row['state']}<br>{$row['zip']}</td>";
                    // echo "<td>{$row['phone']}</td>";
                    echo "<td>{$row['pname']}</td>";
                    echo "<td><img src='{$row['image']}' height='50px' width='50px'></td>";
                    
                    if ($row['order_status'] == 'Processing') {
                        echo "<td ><span class='badge badge-warning status-badge text-light'>{$row['order_status']}</span></td>";
                    } else {
                        echo "<td><span class='badge badge-success status-badge text-light'>{$row['order_status']}</span></td>";
                    }
                    echo"<td><a href='?page=update_status&status_id={$row['order_id']}' class='text-light'>
                    <button  class='btn btn-success' >Shipped</button></a></td";
                    echo "</tr>";
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