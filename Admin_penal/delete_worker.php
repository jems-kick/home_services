<?php
include "db_connect.php"; 

if (isset($_GET['id'])) {
    $workerid = $_GET['id'];

    
    $sql = "DELETE FROM workers WHERE id = $workerid";

    
    if (mysqli_query($conn, $sql)) {
        // Redirect to workers_view.php after successful deletion
        header("Location: worker_view.php");
        exit();
    } else {
        // Output error if the query fails
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
