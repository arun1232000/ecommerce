<style>
.card:hover {
            transform: scale(1.05); /* Increase size on hover */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
        }

        
        </style>
<?php

include('connection.php');
if($_GET['viewid']){
    $id=$_GET['viewid'];
$sql="select * from products where id=$id";
$result=mysqli_query($connection,$sql);
}
?>
<?php
while($row=mysqli_fetch_assoc($result)){

echo"
<div class='container-fluid mt-5 '>
<div class='container p-5'>
    <div class='row'>
        
        <div class='col-md-6'>
            <img src='../admin/{$row['image']}' alt='Product Image' class='img-fluid'>
        </div>
        <div class='col-md-6'>
            <h1>{$row['pname']}</h1>
            <p class='text-muted'>{$row['description']}</p>
            <h2 class='text-success'>{$row['price']} <i class='fa-solid fa-indian-rupee-sign'></i></h2>
            <a href='?page=product-cart&cartid={$row['id']}' class='text-light'>
            <button type='submit' class='btn btn-primary' name='addto_cart'>Add to cart</button></a>

            </div>
    </div>
</div>";
}
?>