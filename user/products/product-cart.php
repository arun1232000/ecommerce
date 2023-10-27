<?php

include('connection.php');
if($_SESSION['email']){

if (isset($_GET['cartid'])) {
    $cartid = $_GET['cartid'];

    
    if (isset($_SESSION['cart'])) {
        
    } else {
        
        $_SESSION['cart'] = array();
    }

    
    $sql = "SELECT * FROM products WHERE id = $cartid";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    $session_array = array(
        "id" => $row['id'],
        "pname" => $row['pname'],
        "price" => $row['price'],
        "image" => $row['image'],
    );
    $_SESSION['cart'][] = $session_array;
    ?>
    <!-- <script>
    
        window.history.back();
    
</script> -->
<?php
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

</head>
<body>
    <div class="container mt-5 p-4">
   
        <div class="container-fluid mt-4 p-4">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    
                                    <th scope="col" class="text-right d-none d-md-block" width="200">actions</th>
                                </tr>
                            </thead>
                            <tbody>
     
                     
        <?php
    
        $total=0;
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product) {
               
                echo "
                <tr>
                                    <td>
                                        <figure class='itemside align-items-center'>
                                            <div class=aside><img src='../admin/{$product['image']}' width='80px' height='80px' data-abc='true'>
                                                <p>{$product['pname']}</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class='form-control' >
                                            <option value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4</option>
                                        </select> </td>
                                    <td>
                                        <div class='price-wrap'> <var class='price'>{$product['price']}</var> <i class='fa-solid fa-indian-rupee-sign'></i>  </div>
                                    </td>
                                    <td class='text-right d-none d-md-block'> <a data-original-title='Save to Wishlist' title='' href='' class='btn btn-danger' data-toggle='tooltip' data-abc='true'> <i class='fa fa-heart'></i></a> <a href='?page=remove_cart&removeid={$product['id']}' class='btn btn-danger' data-abc='true'> Remove</a> </td>
                                </tr>
                                
           ";
           $total+=$product['price'];
               
            }
           
        } else {
            echo '<p>Your cart is empty.</p>';
        }
        ?>
                </tbody>
                        </table>
                    </div>
                </div>  
                </aside>
            <aside class="col-lg-3">
               
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd class="text-right ml-3"><?php echo $total;?> <i class='fa-solid fa-indian-rupee-sign'></i></dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>shipping:</dt>
                            <dd class="text-right text-success ml-3">+<?php if($_SESSION['cart']){echo $del=40;}?> <i class='fa-solid fa-indian-rupee-sign'></i></dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3"><strong><?php echo $total+$del;?> <i class='fa-solid fa-indian-rupee-sign'></i></strong></dd>
                        </dl>
                        <hr> <a href="?page=payment_address" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make Purchase </a> <a href="?page=products" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
 </div>
   
    </div>

    
