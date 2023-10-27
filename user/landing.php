<style>
        /* Custom styles for the featured products section */
        .featured-products {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .product-card {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .very-large-text {
    font-size: 3rem; /* Adjust the font size as needed */
}

        
.card:hover {
            transform: scale(1.05); /* Increase size on hover */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
}
.serives-agile{
  background: #edf0f0;
}

        
    </style>
<?php

session_start();
if($_SESSION['email']){
	echo"
	<script>
// alert('Welcome {$_SESSION['email']}');
</script>";



}

else{
    header('location:../login.php');
}

include('connection.php');
$sql = "select * from products LIMIT 6";
$result = mysqli_query($connection, $sql);
?>

<header class="jumbotron text-center mt-5 p-4">

<h1>Welcome to E-Commerce Store</h1>
<p>Your one-stop shop for all your needs.</p>

<a class="btn btn-primary" href="?page=products">Shop Now</a>
</header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-85" src="./land1a.jpg" alt="First slide">
      <div class="carousel-caption">
        <h1 class="very-large-text">Welcome To The World Of Shopping</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus exercitationem...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-85" src="./land2a.jpg" alt="Second slide">
      <div class="carousel-caption">
        <h1 class="very-large-text text-shadow">One Website For All Your Needs.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus exercitationem...</p>
      </div>
    </div>
    <div class="carousel-item"> <!-- Corrected "div class" to "class" -->
      <img class="d-block w-100 h-85" src="./land3a.jpg" alt="Third slide">
      <div class="carousel-caption">
        <h1 class="very-large-text text-shadow">You Can Get Everything From Here</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus exercitationem...</p>
      </div>
    </div>
  </div>
</div>



<section class="mt-5" style="background-color: #f5f5f5;">
  <div class="container text-dark pt-3">
    <header class="pt-4 pb-3">
      <h3>Why choose us</h3>
    </header>

    <div class="row mb-4">
      <div class="col-lg-4 col-md-6">
        <figure class="d-flex align-items-center mb-4">
          <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
            <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
          </span>
          <figcaption class="info">
            <h6 class="title">Reasonable prices</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
          </figcaption>
        </figure>
        <!-- itemside // -->
      </div>
      <!-- col // -->
      <div class="col-lg-4 col-md-6">
        <figure class="d-flex align-items-center mb-4">
          <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
            <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
          </span>
          <figcaption class="info">
            <h6 class="title">Best quality</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
          </figcaption>
        </figure>
        <!-- itemside // -->
      </div>
      <!-- col // -->
      <div class="col-lg-4 col-md-6">
        <figure class="d-flex align-items-center mb-4">
          <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
            <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
          </span>
          <figcaption class="info">
            <h6 class="title">Worldwide shipping</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
          </figcaption>
        </figure>
        <!-- itemside // -->
      </div>
      <!-- col // -->
      <div class="col-lg-4 col-md-6">
        <figure class="d-flex align-items-center mb-4">
          <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
            <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
          </span>
          <figcaption class="info">
            <h6 class="title">Customer satisfaction</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
          </figcaption>
        </figure>
        <!-- itemside // -->
      </div>
      <!-- col // -->
      <div class="col-lg-4 col-md-6">
        <figure class="d-flex align-items-center mb-4">
          <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
            <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
          </span>
          <figcaption class="info">
            <h6 class="title">Happy customers</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
          </figcaption>
        </figure>
        <!-- itemside // -->
      </div>
      <!-- col // -->
      <div class="col-lg-4 col-md-6">
        <figure class="d-flex align-items-center mb-4">
          <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
            <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
          </span>
          <figcaption class="info">
            <h6 class="title">Thousand items</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
          </figcaption>
        </figure>
        <!-- itemside // -->
      </div>
      <!-- col // -->
    </div>
  </div>
  <!-- container end.// -->
</section>


<!-- Featured Products -->

<section class="featured-products">
        <div class="container">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div id="featuredCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Featured Product 1 -->
                    <div class="carousel-item active">
                        <div class="row">
                          <?php
                          $s="select * from products LIMIT 3";
                          $r=mysqli_query($connection,$s);
                          while($row=mysqli_fetch_assoc($r)){
                        
                            echo "<div class='col-md-4 '>
                            <div class='container mt-5 '>
                      <div class='card shadow p-3 mb-5 bg-white rounded' style='width: 17rem;'>
                      <img class='card-img-top' src='../admin/{$row['image']}'width='200px' height='200px' alt='Card image cap'>
                          <div class='card-body'>
                          
                              
                              <h5 class='card-title'> {$row['pname']}</h5>
                              
                              <p class='card-text'>Price: {$row['price']} <i class='fa-solid fa-indian-rupee-sign'></i></p>
                             
                              <a href='?page=product-cart&cartid={$row['id']}' class='text-light'>
                               <button type='submit' class='btn btn-primary' name='addto_cart'> Add to cart
                              </button></a>
                              <a href='?page=product_details&viewid={$row['id']}' class='text-light'>
                              <button type='submit' class='btn btn-success' name='addto_cart'> View
                              </button></a>
                          </div>
                          </div>
                      </div>
                    </div>";}
                            ?>
                            <!-- Add more featured product cards within the same slide -->
                        </div>
                    </div>

                    <!-- Featured Product 2 -->
                    <div class="carousel-item">
                        <div class="row">
                        <?php
                          $s="select * from products LIMIT 3 offset 25";
                          $r=mysqli_query($connection,$s);
                          while($row=mysqli_fetch_assoc($r)){
                        
                            echo "<div class='col-md-4 '>
              <div class='container mt-5 '>
                      <div class='card shadow p-3 mb-5 bg-white rounded' style='width: 17rem;'>
                      <img class='card-img-top' src='../admin/{$row['image']}'width='200px' height='200px' alt='Card image cap'>
                          <div class='card-body'>
                          
                              
                              <h5 class='card-title'> {$row['pname']}</h5>
                              
                              <p class='card-text'>Price: {$row['price']} <i class='fa-solid fa-indian-rupee-sign'></i></p>
                             
                              <a href='?page=product-cart&cartid={$row['id']}' class='text-light'>
                               <button type='submit' class='btn btn-primary' name='addto_cart'> Add to cart
                              </button></a>
                              <a href='?page=product_details&viewid={$row['id']}' class='text-light'>
                              <button type='submit' class='btn btn-success' name='addto_cart'> View
                              </button></a>
                          </div>
                          </div>
                      </div>
                    </div>";
                          }
                            ?>
                            <!-- Add more featured product cards within the same slide -->
                        </div>
                    </div>

                    <!-- Featured Product 3 -->
                    <div class="carousel-item">
                        <div class="row">
                        <?php
                          $s="select * from products LIMIT 3 offset 28";
                          $r=mysqli_query($connection,$s);
                          while($row=mysqli_fetch_assoc($r)){
                        
                            echo "<div class='col-md-4 '>
              <div class='container mt-5 '>
                      <div class='card shadow p-3 mb-5 bg-white rounded' style='width: 17rem;'>
                      <img class='card-img-top' src='../admin/{$row['image']}'width='200px' height='200px' alt='Card image cap'>
                          <div class='card-body'>
                          
                              
                              <h5 class='card-title'> {$row['pname']}</h5>
                              
                              <p class='card-text'>Price: {$row['price']} <i class='fa-solid fa-indian-rupee-sign'></i></p>
                             
                              <a href='?page=product-cart&cartid={$row['id']}' class='text-light'>
                               <button type='submit' class='btn btn-primary' name='addto_cart'> Add to cart
                              </button></a>
                              <a href='?page=product_details&viewid={$row['id']}' class='text-light'>
                              <button type='submit' class='btn btn-success' name='addto_cart'> View
                              </button></a>
                             
                          </div>
                          </div>
                      </div>
                    </div>";
                          }
                            ?>
                            <!-- Add more featured product cards within the same slide -->
                        </div>
                    </div>
                </div>
                
                <a class="carousel-control-prev ms-auto" href="#featuredCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true" style="color: black;"></span>
                    <span class="sr-only me-auto">Previous</span>
                </a>
                <a class="carousel-control-next me-auto" href="#featuredCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon me-auto"  aria-hidden="true" style="color: black;"></span>
                    <span class="sr-only me-auto" >Next</span>
                </a>
                
            </div>
        </div>
    </section>

    
