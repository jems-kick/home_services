<?php
include "db_connect.php";

if (isset($_GET['id'])) {
    $serviceid = $_GET['id'];

    // SQL query to delete the service
    $delete_sql = "DELETE FROM services WHERE serviceid = $serviceid";
    
    if (mysqli_query($conn, $delete_sql)) {
        header("Location: service_view.php"); // Redirect after successful deletion
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
