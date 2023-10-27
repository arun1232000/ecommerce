<!DOCTYPE html>
<html>
<head>
    <title>Leave Approval Page</title>
</head>
<body>
    <h2>Leave Approval Page</h2>
    <table border="1">
        <tr>
            <th>Request ID</th>
            <th>User ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Reason</th>
            <th>Action</th>
        </tr>
        <?php
       
        include('connection.php');

        

        
        $sql = "SELECT * FROM leave_requests";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['start_date'] . "</td>";
                echo "<td>" . $row['end_date'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['reason'] . "</td>";
                echo "<td>
                        <form method='post' action='approve_reject.php'>
                            <input type='hidden' name='request_id' value='" . $row['id'] . "'>
                            <input type='submit' name='approve' value='Approve'>
                            <input type='submit' name='reject' value='Reject'>
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No pending leave requests</td></tr>";
        }

        
        ?>
    </table>
</body>
</html>
