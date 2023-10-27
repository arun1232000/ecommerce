<?php
include('connection.php');
error_reporting(E_ALL);

ini_set('display_errors', 1);
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $sql="SELECT * FROM user WHERE username='$username' or email='$email'";
    $result=mysqli_query($connection,$sql);
    $num=mysqli_num_rows($result);
    if($num > 0){
       
        echo"<script>alert('this username or email is already taken')</script>";
    }
    else{
        $passwordmd5=md5($_POST['password']);
        $profile_pic = 'user.png';
        $insert="insert into user (username,email,password,profile_pic) values('$username','$email','$passwordmd5','$profile_pic')";
        $result=mysqli_query($connection,$insert);
        echo"<script>alert('success')</script>";
        if($result){
        
        require 'PHPMailer-master/src/PHPMailer.php';
        require 'PHPMailer-master/src/SMTP.php';
        require 'PHPMailer-master/src/Exception.php';
        
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'leodas6064@gmail.com';
        $mail->Password = 'xoeo rvtf eylk acco';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        $mail->setFrom('leodas6064@gmail.com', 'E-commerce Admin');
        $mail->addAddress($email, $username);
        
        $mail->Subject = 'Welcome'." ".$username;
        $htmlContent = file_get_contents('./welcome.php'); 
        $mail->isHTML(true);
        $mail->Body = $htmlContent;
        
        if ($mail->send()) {
            echo 'Email sent successfully.';
        } else {
            echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
        }
        header('location:login.php');
    
    }

    
}

?>
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
            display: flex;
            /* align-items: center; */
            justify-content: center;
            
        }
        .login-container {
        position: absolute;
        top:100px;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
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
        <h2 style="text-align:center;">Register</h2>
        <form action="" method="POST">
        <label>username</label>
            <input type="text" id="username" name="username" required autocomplete="off">

            <label>email</label>
            <input type="text" id="email" name="email" onkeyup="return check()"required autocomplete="off">
            <p id="p1" ></p>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            Already have an account<a href="login.php" style="color:blue;"> Login</a>
            <div style="display:flex;justify-content:center;">
            <input type="submit" name="submit" value="Register">
    </div>
        </form>
    </div>
</body>
<script>
function check() {
    var email = document.getElementById('email').value;
    var p1 = document.getElementById('p1');

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            if (xhttp.responseText === "Email is not available") {
                p1.innerHTML = "This email is already taken";
                p1.style.color = "red"; 
            } else if (xhttp.responseText === "Email is available") {
                p1.innerHTML = "This email is available";
                p1.style.color = "green"; 
            } else {
                
            }
        }
    };

    xhttp.open("GET", 'signup2.php?email=' + email, true);
    xhttp.send();
}
</script>
</html>
