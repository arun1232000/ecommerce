<?php
include('connection.php');
$sql = "select * from products";
$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>Product List</title>
</head>
<body>
    <div class="container mt-4">
    
     
    <h2>User View</h2>
    
    <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='col-md-4'>
                <div class='container mt-5'>
                        <div class='card' style='width: 18rem;'>
                        <img class='card-img-top' src='../{$row['image']}' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>ID: {$row['id']}</h5>
                                <h5 class='card-title'>Name: {$row['pname']}</h5>
                                <p class='card-text'>Description: {$row['description']}</p>
                                <p class='card-text'>Price: {$row['price']}$</p>
                                <button type='submit' class='btn btn-primary' name='submit'><a href='' class='text-light'>Add to cart</a></button>
                            </div>
                            </div>
                        </div>
                      </div>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>





