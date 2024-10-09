<?php
include('db_connect.php');

if (isset($_REQUEST['submit'])) {
    // Collect and sanitize form inputs
    $username = $_REQUEST['username'];
    $service_type = $_REQUEST['service_type'];
   
    $request_time = $_REQUEST['request_time'];
    $phoneno = $_REQUEST['phoneno'];
    $address =$_REQUEST['address'];
    $status = $_REQUEST['status'];

    // Insert query
    $query = "
        INSERT INTO user_requested_tasks (username, service_type, request_time, phoneno, address, status)
        VALUES ('$username', '$service_type',  '$request_time', '$phoneno', '$address', '$status')
    ";

    // Execute the query
    if (mysqli_query($conn, $query)) {
       header('location:Appointment.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }


    mysqli_close($conn);
}
?>
