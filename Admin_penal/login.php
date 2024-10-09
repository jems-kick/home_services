<?php
include('db_connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin_users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['admin_user'] = $username;
        header("Location: adminhomepage.php");
    } else {
        echo "<div class='alert alert-danger'>Invalid login credentials!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e9ecef; 
            font-family: 'Arial', sans-serif; 
        }
        .login-container {
            max-width: 450px;
            /* margin: 100px auto; */
            margin-left: 400px;
            margin-top: 40px;
            padding: 40px; 
            background: #ffffff;
            border-radius: 10px; 
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            text-align: center; 
        }
        .login-container img {
            width: 150px; 
            margin-bottom: 20px;
        }
        h2 {
            margin-bottom: 30px; 
            font-weight: bold; 
            color: #343a40; 
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #0664c9cc; 
            border: none; 
            padding: 12px; 
            border-radius: 25px; 
            transition: background-color 0.3s, transform 0.3s; /* Smooth transition */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
            transform: translateY(-2px); /* Lift effect on hover */
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em; /* Slightly smaller text */
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src="logo.png" alt="Logo"> <!-- Add your logo here -->
    <h2>Admin Login</h2>
    <form method="post" action="login.php">
        <div class="form-group">
            <label for="u_name">Username:</label>
            <input type="text" class="form-control" name="username" id="u_name" required>
        </div>
        <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" class="form-control" name="password" id="pass" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <p class="footer">Don't have an account? <a href="signup.php">Register here</a></p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
