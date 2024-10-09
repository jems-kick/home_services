<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unique_id = $_POST['request_id'];
    $worker_id = $_POST['worker_id'];
    $requested_time = $_POST['requested_time'];

    if (!empty($worker_id)) {
        $update_query = "UPDATE user_requested_tasks SET worker_id = '$worker_id', status = 'assigned' WHERE id = '$unique_id'";
        mysqli_query($conn, $update_query);

        $insert_query = "INSERT INTO worker_assigned_tasks (worker_id, assigned_time, status, user_task_id) VALUES ('$worker_id', '$requested_time', 'pending', $unique_id)";
        mysqli_query($conn, $insert_query);

        header("Location: Appointment.php");
        exit();
    } else {
        header("Location: Appointment.php");
        exit();
    }
} else {
    header("Location: Appointment.php");
    exit();
}
?>
