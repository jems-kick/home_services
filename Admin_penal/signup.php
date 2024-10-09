<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO admin_users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f2f5; /* Softer background color */
        }
        .container {
            max-width: 450px; /* Slightly wider container */
            margin-left: 400px;
            margin-top: 30px;
            padding: 20px;
            background: #ffffff; /* Bright white background */
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Subtle shadow */
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40; /* Darker text for better contrast */
            font-family: 'Arial', sans-serif;
            font-weight: bold; /* Bold heading */
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn {
            width: 100%;
            background-color: #0664c9cc; /* Bootstrap primary color */
            border: none;
            padding: 12px; /* Increased padding */
            font-size: 16px; /* Larger text */
            border-radius: 25px; /* Rounded buttons */
            color: #ffffff;
            transition: background-color 0.3s, transform 0.3s; /* Smooth transition */
        }
        .btn:hover {
            background-color: #0056b3; /* Darker shade on hover */
            transform: translateY(-2px); /* Slight lift on hover */
        }
        .logo {
            display: block;
            margin: 0 auto 20px; /* Center the logo */
            width: 150px; /* Adjust logo width */
            height: auto; /* Maintain aspect ratio */
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="logo.png" alt="Logo" class="logo"> <!-- Update the logo path here -->
    <h2>Admin Signup</h2>
    <form method="post" action="signup.php">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn">Sign Up</button>
    </form>
    <div class="footer">
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
