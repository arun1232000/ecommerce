<?php
include('connection.php');

if (isset($_GET['email'])) {
    $email = $_GET['email'];

   
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        
        echo "Email is not available";
    } else {
        
        echo "Email is available";
    }
} else {
    
    echo "Invalid request";
}
