<?php
session_start();
if(!$_SESSION['cart']){
    ?>
        <script>
            alert('Your cart is empty');
        window.location.href = "index.php?page=product-cart";
        </script>
    <?php
}
$total=0;
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        $price=$product['price'];
        $total+=$price;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Payment Form</title>
    <!-- Add Bootstrap CSS (you can use a CDN or include it from your local files) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .container{
            display:flex;
            justify-content: center;
        }
        .card{
            width: 400px;
        }
        </style>
</head>
<body>
    <div class="container mt-5 p-4 w-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Card details</h2>
            </div>
            <div class="card-body w-5">
            <div class="mb-3">
                        <label for="card_type" class="form-label">Select Card Type:</label>
                        <select class="form-select" id="card_type" name="card_type" required>
                            <option value="visa">Visa</option>
                            <option value="mastercard">MasterCard</option>
                            <option value="rupay">American Express</option>
                            <option value="discover">Discover</option>
                            <!-- Add more card types as needed -->
                        </select>
                    </div>
                    <!-- Card Images -->
                    <div class="card-images mb-2" style="display:flex;flex-direction:row;justify-content:space-evenly;">
                        <img src="./products/visa3.png" width="70px" height="45px" alt="Visa Card" id="visa-image">
                        <img src="./products/card.png" width="70px" height="45px" alt="MasterCard" id="mastercard-image">
                        <img src="./products/am3.png" width="70px" height="45px" alt="MasterCard" id="mastercard-image">
                        <img src="./products/dis.png" width="70px" height="45px" alt="MasterCard" id="mastercard-image">
                        <!-- Add more card images for other card types as needed -->
                    </div>
                <form action="?page=payment" method="post">
                    <div class="mb-3">
                        <label for="card_number" class="form-label">Card Number:</label>
                        <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="expiration_date" class="form-label">Expiration Date:</label>
                        <input type="text" class="form-control" id="expiration_date" name="expiration_date" placeholder="MM/YY" required>
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV:</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" required>
                    </div>
                    <div class="mb-3">
                        
                        <input type="hidden" class="form-control" id="amount" name="amount" placeholder="Total Amount" value="<?php echo $total; ?>">
                    </div>
                    <h5>Total: <i><?php echo $total+40; ?>/-</i></h1>
                    
                    <input type="hidden" name="payment_method" value="dummy">
                    <button type="submit" class="btn btn-primary">Confirm Payment</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>