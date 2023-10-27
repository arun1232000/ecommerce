<?php

include('connection.php');

if (isset($_POST['approve'])) {
    $request_id = $_POST['request_id'];
    $sql = "UPDATE leave_requests SET status='Approved' WHERE id='$request_id'";
    mysqli_query($connection, $sql);
} elseif (isset($_POST['reject'])) {
    $request_id = $_POST['request_id'];
    $sql = "UPDATE leave_requests SET status='Rejected' WHERE id='$request_id'";
    mysqli_query($connection, $sql);
}



header("Location: admin_leave_approval.php");

?>
