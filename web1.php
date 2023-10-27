<?php
session_start();
if($_SESSION['username']){
    echo"<script>alert('WELCOME ".$_SESSION['username']."')</script>";
}
else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web1.css">
</head>
<body>
    

    
    <header>
    <div class="container">
        <a href="#">logo</a>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="changepassword.php">Change Password</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>
</header>
<main>
    <div class="banner-container">
        <div class="container">
        <div class="left-section">
            <h1>Welcome to Arun's web

            </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est suscipit debitis consequatur animi deleniti voluptatem? Repellat omnis necessitatibus beatae optio unde ipsa, natus ut tenetur modi vitae deleniti nam autem.</p>
             <button>LOgin</button>
        </div>
        <div class="right-section">
            <h4>please fill the form</h4> 
             <form action="#">
                <div class="input-group">
                    <input type="text" id="name">
                    <label>name</label>
                </div>
                <div class="input-group">
                    <input type="email" id="email">
                    <label>email</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password">
                    <label>password</label>
                </div>
                <div class="submit-section">
                    <input type="button" class="submit-button" value="submit">
                </div>
             </form>
            </div>
        </div>
    </div>
    <section class="section-two">
        <div class="card-container" >
            <div class="img-container">
                <img src="p1.jpg">
            </div>
                <div class="name">
                <h2>john</h2>
            
            </div>
        </div>
        <div class="card-container" >
            <div class="img-container">
                <img src="p5.png">
            </div>
             <div class="name">
                <h2>mathew</h2>
            
            </div>
        </div>
        <div class="card-container" >
            <div class="img-container">
                <img src="p4.jpg">
            </div>
                <div class="name">
                
                <h2>Claire</h2>
            
            </div>
        </div>
    
    </section>
</main>
<footer>
    Designed and developed by <span>Arun Abraham</span>
</footer>
</body>
</html>