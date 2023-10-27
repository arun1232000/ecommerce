<style>


.form-control:focus {
  box-shadow: none;
  border-color: #BA68C8;
}

.profile-button {
  background: #BA68C8;
  box-shadow: none;
  border: none;
}

.profile-button:hover {
  background: #682773;
}

.profile-button:focus {
  background: #682773;
  box-shadow: none;
}

.profile-button:active {
  background: #682773;
  box-shadow: none;
}

.back:hover {
  color: #682773;
  cursor: pointer;
}
</style>
<?php

include('connection.php');

session_start();
error_reporting(E_ALL);

ini_set('display_errors', 1);
$user_email=$_SESSION['email'];

if(isset($_POST['submit'])){
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $phone=$_POST['phone'];

    if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
        $sql="update user set full_name='$full_name',email='$email',address='$address',city='$city',state='$state',zip='$zip',phone='$phone' where email='$user_email'";
        $result=mysqli_query($connection,$sql);
        echo"<script>alert('Profile Updated Successfully');</script>";
    }else{
        $image=$_FILES['image']['name'];
        $image_tmp=$_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp,$image);
    
        $sql="update user set full_name='$full_name',profile_pic='$image', email='$email',address='$address',city='$city',state='$state',zip='$zip',phone='$phone' where email='$user_email'";
        $result=mysqli_query($connection,$sql);
        echo"<script>alert('Profile Updated Successfully');</script>";
    }
   

}

$sq="select * from user where email='$user_email'";
$r=mysqli_query($connection,$sq);
$row=mysqli_fetch_assoc($r);

?>

<div class="container rounded bg-white mt-5 p-2">
    <h2 style="text-align:center;">My Profile</h2>
    <hr>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4 border-right" style="background:gray;color:white;">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="./<?php echo $row['profile_pic'];?>"  height="120" width="120"><span class="font-weight-bold"><?php echo $row['full_name'];?></span><span class="text-gray-50"><?php echo $row['email'];?></span><span><?php echo $row['city'];?>, <?php echo $row['state'];?></span></div>
            </div>
            <div class="col-md-8"style="background:#edf0f0; ">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <a class="text-dark"style="text-decoration:none;" href="?page=landing"><h6>Back to home</h6></a>
                        </div>
                      
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="full name"  name="full_name" value="<?php echo $row['full_name'];?>"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['email'];?>" placeholder="email" name=email readonly></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control"  placeholder="street" value="<?php echo $row['address'];?>" name="address"></div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="city" value="<?php echo $row['city'];?>" name="city"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control"  placeholder="State" value="<?php echo $row['state'];?>" name="state"></div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="zip code" value="<?php echo $row['zip'];?>" name="zip"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="phone number" value="<?php echo $row['phone'];?>" name="phone"></div>
                        <div class="col-md-6"> <label for="image">Choose a new profile picture:</label><input type="file" class="form-control" name="image" value="<?php echo $row['profile_pic'];?>" ></div>
                    </div>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit" name="submit">Save Profile</button>
                     <!-- <a href="?page=landing"><button class="btn btn-danger "  >Cancel</button></a> -->
                </div> 
                </div>
            </div>
        </div>
</form>
    </div>
    <hr>
   