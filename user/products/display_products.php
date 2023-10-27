<?php
include('./connection.php');
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
<style>
li a:focus{
            background-color: #edf;
        }
.card:hover {
     transform: scale(1.05); /* Increase size on hover */
     box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
}
        
        </style>
<body>

<div class="container-fluid mt-3 ">
<nav class=" navbar-expand-lg navbar navbar-dark text-light shadow-sm p-1 rounded"  style="background-color:#edf0f0; ">
        <div class="container mt-5 p-3" >
            
            
           <div class="text-center">
                <ul class="navbar-nav ml-auto a  mx-auto">
                <div class="mx-5" onclick="send(1)" >
                    <li class="nav-item  " >
                        <a class="nav-link " href="#" ><img src="products/responsive.png" width='100px' height='100px'class="rounded-circle "></a>
                        <a class="nav-link" href="#" ><h5 class="text-dark">Electronics</h5></a>
                    </li>
               </div>
               <div class="mx-5" id='c2'  onclick= "  send(2)">
                    <li class="nav-item ">
                        <a class="nav-link " href="#" id="cat "><img src="products/grocery-cart.png" width='100px' height='100px'class="rounded-circle"></a>
                        <a class="nav-link" href="#" id="cat"><h5 class="text-dark">Grocery</h5></a>
                    </li>
               </div>
               <div class="mx-5" onclick="send(3)">
                    <li class="nav-item ">
                        <a class="nav-link " href="#"><img src="products/woman1.png" width='100px' height='100px' class="rounded-circle"></a>
                        <a class="nav-link" href="#"><h5 class="text-dark">Fashion</h5></a>
                    </li>
                 </div>
                 <div class="mx-5" onclick="send(4)">
                    <li class="nav-item ">
                        <a class="nav-link " href="#"><img src="products/makeup-pouch.png" width='100px' height='100px' class="rounded-circle"></a>
                        <a class="nav-link" href="#"><h5 class="text-dark">Beauty&Toys&More</h5></a>
                    </li>
                 </div>
                 <div class="mx-5" onclick="send(5)">
                    <li class="nav-item ">
                        <a class="nav-link " href="#"><img src="products/small-appliance.png" width='100px' height='100px' class="rounded-circle"></a>
                        <a class="nav-link" href="#"><h5 class="text-dark">Home&Furniture</h5></a>
                    </li>
                 </div>   
                </ul>
             </div>
        </div>
    </nav>
    </div>

    <?php
if($_GET['page']){
    $p=$_GET['page'];
    if($p!='products#'){
    
    include('./products/products-by-category.php');
}
else{
    include('./products/products.php');
}
}



?>

    <!-- Bootstrap JS (optional) -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





