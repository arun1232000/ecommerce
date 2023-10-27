<?php
$_GET['page'];
if($_GET['page']){
    $page=$_GET['page'];

    if($page=='landing'){
        include 'landing.php';
    }

    if($page=='about'){
        include 'about.php';
    }
    if($page=='products'){
        include './products/display_products.php';
    }
    if($page=='product-cart'){
        include './products/product-cart.php';
    }
    if($page=='cat-products'){
        include './products/cat-product.php';
    }
    if($page=='product_details'){
        include './products/product_details.php';
    }
    if($page=='remove_cart'){
        include './products/remove_cart.php';
    }
    if($page=='change-password'){
        include '../changepassword.php';
    }
    if($page=='search_bar'){
        include './products/search_bar.php';
    }
    if($page=='products-by-category'){
        include './products/products-by-category.php';
    }
    if($page=='payment_address'){
        include './products/payment_address.php';
    }
    if($page=='payment_form'){
        include './products/payment_form.php';
    }
    if($page=='payment'){
        include './products/payment.php';
    }
    if($page=='my_orders'){
        include './products/my_orders.php';
    }
    if($page=='profile'){
        include './profile.php';
    }
    
}
else{
    include 'landing.php';
}

?>