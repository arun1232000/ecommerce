<?php
echo"hai";
if($_GET['page']){
$page=$_GET['page'];
if($page=='addproducts'){
    include 'products/addproducts.php';
}

if($page=='manageproducts'){
    include 'products/manage_products.php';
}
if($page=='update_products'){
    include 'products/update_products.php';
}
if($page=='delete_products'){
    include 'products/delete_products.php';
}
if($page=='manageusers'){
    include 'user/display.php';
}
if($page=='update_user'){
    include 'user/update.php';
}
if($page=='delete_user'){
    include 'user/delete.php';
}
if($page=='home'){
    include 'landing.php';
}
if($page=='orders'){
    include 'products/orders.php';
}
if($page=='update_status'){
    include 'products/update_status.php';
}


}else{
    include('landing.php');
}
?>

