<?php
session_start();
if(isset($_GET['removeid'])){
   $removeid=$_GET['removeid'];
   if($_SESSION['cart']){
    foreach($_SESSION['cart'] as $key =>$product){
       if($product['id']==$removeid){
        unset($_SESSION['cart'][$key]);
       
       }
    }
   }
?>
<script>
         
        window.location.href = "index.php?page=product-cart";

</script>
   <?php
}
?>




