<?php
session_start();

if (!isset($_SESSION['admin_user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h2>Welcome to the Admin Dashboard</h2>
<p>Logged in as: <?php echo $_SESSION['admin_user']; ?></p>

<a href="Appointment.php">Appointment</a><br>
<a href="logout.php">Logout</a>

</body>
</html>
