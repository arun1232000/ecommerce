<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>

<body>
<div class="container mt-5 p-2">
    <div class="row" id="products">
           <?php
           include('connection.php');
           $sql="select * from products where cid=1";
           $result=mysqli_query($connection,$sql);
           while($row=mysqli_fetch_assoc($result)){
            echo"<div class='col-md-4'>
        <div class='container mt-5 ' id='product'>
            <div class='card shadow p-3 mb-5 bg-white rounded' style='width: 18rem;'>
                <img class='card-img-top' src='../admin/{$row['image']}' width='200px' height='200px' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>{$row['pname']}</h5>
                    <p class='card-text'>Price: {$row['price']} <i class='fa-solid fa-indian-rupee-sign'></i></p>
                    <a href='?page=product-cart&cartid={$row['id']}' class='text-light'>
                    <button type='submit' class='btn btn-primary' name='addto_cart'>
                       Add to cart
                    </button></a>
                    <a href='?page=product_details&viewid={$row['id']}' class='text-light'>
                    <button type='submit' class='btn btn-success' name='addto_cart'>
                        View
                    </button></a>
                </div>
            </div>
       </div>
    </div>";

           }
           ?>
        </div>
</div>
<script>
 
 

        function send(id){    
        var xhttp = new XMLHttpRequest();
      
        
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
        console.log(xhttp.responseText);
        var data = $.parseJSON(xhttp.responseText);
          var output= "";

for (i=0; i < data.length; i++){
    current_data=data[i];
   
    output+=` <div class="col-md-4">
        <div class="container mt-5 " id="product">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                <img class="card-img-top" src="../admin/${current_data.image}" width="200px" height="200px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">${current_data.pname}</h5>
                    <p class="card-text">Price: ${current_data.price} <i class="fa-solid fa-indian-rupee-sign"></i></p>
                    <button type="submit" class="btn btn-primary" name="addto_cart">
                        <a href="?page=product-cart&cartid=${current_data.id}" class="text-light">Add to cart</a>
                    </button>
                    <button type="submit" class="btn btn-success" name="addto_cart">
                        <a href="?page=product_details&viewid=${current_data.id}" class="text-light">View</a>
                    </button>
                </div>
            </div>
       </div>
    </div>`;
}


//$("#products").append(output);
document.getElementById('products').innerHTML=output;

        }
    };
   
    xhttp.open("GET", './products/product_fetch.php?cid='+id, true);
    xhttp.send();
     
    }  
    

 
    
   
    
      // JavaScript variable that we will pass in AJAX call
      
      //AJAX Call
    
      
  

 
 






 </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
</body>
</html>