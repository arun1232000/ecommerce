<?php
include('connection.php');
$sql="select * from categories";
$result=mysqli_query($connection,$sql);
$num=mysqli_num_rows($result);

for($i=1;$i<=$num;$i++){
$sql="select * from categories where cid=$i";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);


$sq="select * from products where cid=$i";
$res=mysqli_query($connection,$sq);
{
    ?>
    <div class="container mt-3 p-5 ">
    <h1><?php echo $row['category_name'] ;?></h1>
    <div class="row">
        <?php
        while($rows=mysqli_fetch_assoc($res))
    echo "<div class='col-md-4 '>
    <div class='container mt-5 '>
            <div class='card shadow p-3 mb-5 bg-white rounded' style='width: 18rem;'>
            <img class='card-img-top' src='../admin/{$rows['image']}'width='200px' height='200px' alt='Card image cap'>
                <div class='card-body'>
         

                    <h5 class='card-title'>Name: {$rows['pname']}</h5>

                    <p class='card-text'>Price: {$rows['price']} <i class='fa-solid fa-indian-rupee-sign'></i></p>
                    
                    <button type='submit' class='btn btn-primary' name='addto_cart'><a href='?page=product-cart&cartid={$row['id']}' class='text-light'>Add to cart</a></button>
                    
                <button type='submit' class='btn btn-success ' name='addto_cart'><a href='?page=product_details&viewid={$rows['id']}' class='text-light'>View </a></button>
           
                </div>
                </div>
            </div>
          </div>";
}
?>
</div>
</div>
<?php

}
?>