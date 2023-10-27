<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');

ini_set('display_errors', 1);
$_SESSION["email"];
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["payment_method"] == "dummy") {
        
      
        $user_email = $_SESSION["email"]; 
        $status = "completed";
        $stmt=0;
        
        $order_date=date("Y-m-d H:i:s");
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product) {
                $pid=$product['id'];
                $pname=$product['pname'];
                $price=$product['price'];
                $image=$product['image'];


                $sql = "INSERT INTO orders (user_email,status,pid,pname,price,image,order_date) VALUES ('$user_email', '$status',$pid,'$pname',$price,'$image','$order_date')";
                $stmt = mysqli_query($connection,$sql);
            }
        }
        
        if ($stmt) {
            
            
            require '../PHPMailer-master/src/PHPMailer.php';
            require '..//PHPMailer-master/src/SMTP.php';
            require '../PHPMailer-master/src/Exception.php';
            
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'leodas6064@gmail.com';
            $mail->Password = 'xoeo rvtf eylk acco';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            
            $mail->setFrom('leodas6064@gmail.com', 'E-commerce Admin');
            $mail->addAddress($user_email, '');
            
            $mail->Subject = 'Payment Successfull';
            $htmlContent = file_get_contents('./products/thankyou_mail.php');
            $mail->isHTML(true);
            $mail->Body = $htmlContent;
            
            if ($mail->send()) {
                echo 'Email sent successfully.';
            } else {
                echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            }
            unset($_SESSION['cart']);
            ?>
            <script>
            
        window.location.href = "./products/thankyou.php";
        </script>
        <?php
           
        } 
        else {
            echo "Error creating order: ";
        }

        
    }
}
?>