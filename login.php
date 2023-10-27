<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('./bg1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
           color: #000;
            display: flex;
            justify-content: center;
        }
        .login-container {
            position: absolute;
            top:100px;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            backdrop-filter: blur(5px);
            box-shadow: 10px 5px ;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .login-container label,
        .login-container input {
            display: block;
            margin-bottom: 10px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .login-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            margin-top: 10px;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a{
            text-decoration: none;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
    
    <div class="login-container">
        <h2 style="text-align:center;">Login</h2>
        <form action="" method="POST">
        <label>Email</label>
            <input type="text" id="email" name="email" required>

            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            Don't have an account<a href="signup.php" style="color:blue;"> Register</a>
            <div style="display:flex;justify-content:center;">
            <input type="submit" name="submit" value="Login">
    </div>
        </form>
    </div>
</body>
</html>

<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    
    $password=md5($_POST['password']);
    
    $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
    $result=mysqli_query($connection,$sql);
    $num=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    if($num > 0){
        if($row['user_type']==='admin'){
            $_SESSION['user_type']='admin';
            header('location:/blog/php/ecom/admin/index.php');
            
        }
        else{
            $_SESSION['email']=$email;
            
            header('location:user/index.php'); 
        }
    }
    
    }
    else{
        echo"<script>alert('username and password doesn't match')</script>";
        
    }

    

?>