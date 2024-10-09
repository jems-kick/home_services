<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unique_id = $_POST['request_id'];
    $update_query = "UPDATE user_requested_tasks SET worker_id = NULL, status = 'pending' WHERE id = '$unique_id'";
    mysqli_query($conn, $update_query);
    $assigned_time = date('Y-m-d H:i:s');
    $insert_query = "DELETE FROM worker_assigned_tasks WHERE user_task_id = '$unique_id'";
    mysqli_query($conn, $insert_query);
    header("Location: Appointment.php");
    exit();
} else {
    header("Location: Appointment.php");
    exit();
}
?>
