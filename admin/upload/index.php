<?php
include('connection.php');

if(isset($_POST['submit'])){
    $image_name=$_FILES['image']['name'];
    $image_tmp_name=$_FILES['image']['tmp_name'];

    if(move_uploaded_file($image_tmp_name,$image_name)){
        $sql="INSERT into upload (img) values ('$image_name')";
        $result=mysqli_query($connection,$sql);
    }
    else{
        echo"error";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>upload</h1>
    <form method=POST enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="upload" name="submit">
</form><br>
<?php
$sql="SELECT * from upload";
$result=mysqli_query($connection,$sql);

while($row=mysqli_fetch_assoc($result)){
    
    
   echo" <img src='{$row['img']}' height='300px' width='300px'>";
    
}

?>
    
</body>
</html>