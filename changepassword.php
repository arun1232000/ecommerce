<?php
include('connection.php');
session_start();
if($_SESSION['email']){
if(isset($_POST['submit'])){
$currentpass=md5($_POST['currentpassword']);
$newpass=md5($_POST['newpass']);
$confirmpass=md5($_POST['confirmpass']);

$sq="SELECT * FROM user WHERE password='$currentpass'";
$ex=mysqli_query($connection,$sq);
$r=mysqli_num_rows($ex);
if($r > 0){
    if($newpass===$confirmpass){
       
        $s="UPDATE user SET password='$newpass' WHERE password='$currentpass'";
        mysqli_query($connection,$s);
        unset($_SESSION['email']);
        
        header('location:../login.php');
    }
    else{
        echo"<script>
        alert('password mismatched');
        </script>";
    }
}
   else
   {
    echo"<script>
        alert('incorrect password');
        </script>";
   }         
}
}
else{
    echo"<script>
        alert('unauthorized attempt');
        </script>";
    
}




?>
<div class="container mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword" name="currentpassword" required>
                                <p id="p1"></p>
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" name="newpass" required>
                                <p id="p2"></p>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmpass" required>
                                <p id="p3"></p>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>