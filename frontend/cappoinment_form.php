<?php
session_start(); // Start the session

// Check if the success session variable is set
if (isset($_SESSION['success'])) {
    // Display the alert using JavaScript
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";

    // Unset the session variable after displaying the alert
    unset($_SESSION['success']);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer Appointment Request</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts for a cleaner font style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f3f7fa; /* Soft background */
            font-family: 'Roboto', sans-serif; /* Modern font */
            color: #333;
        }

        .form-container {
            max-width: 600px;
            margin-left: 350px;
            margin-top: 30px;
            padding:30px;
            background-color: #fff; /* White background */
            border-radius: 12px; /* Slightly round corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Softer shadow */
            transition: transform 0.3s;
        }

        .form-container:hover {
            transform: translateY(-5px); /* Subtle lift on hover */
            box-shadow: 0 2px 10px #0664c9cc;
           
        }

        .hover-heading {
    color: #5161ce; /* Default color */
    transition: color 0.3s, transform 0.3s; /* Smooth transition for color and transform */
}

.hover-heading:hover {
    color: #0664c9cc; /* Color on hover */
    transform: translateY(-3px); /* Slightly lift the heading */
}


        .form-container h2 {
            text-align: center;
            color: #515151;
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 1.75em;
        }

        .form-container label {
            font-weight: 500;
            color: #515151;
        }

        .form-group input {
            border: 2px solid #ced4da; /* Thicker border */
            border-radius: 8px; /* Rounded corners */
            padding: 10px;
            transition: border-color 0.3s, box-shadow 0.3s; /* Smooth focus effects */
        }

        .form-group input:focus {
            border-color: #0664c9cc; /* Deep blue on focus */
            box-shadow: 0 0 10px rgba(65, 88, 166, 0.2); /* Slight glow */
        }

        .btn-custom {
            background-color: #0664c9cc; /* Custom dark blue */
            color: #fff;
            padding: 12px;
            font-weight: 700;
            border-radius: 8px;
            margin-top: 10px;
            border: none;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s; /* Smoother hover */
            width: 50%; /* Full width */
        }

        .btn-custom:hover {
            background-color: #0056b3; /* Darker on hover */
            transform: translateY(-3px) scale(1.05); /* Lift and slightly grow button */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Add a shadow effect on hover */
        }

        .note {
            font-size: 14px;
            color: #888;
            margin-top: 10px;
            text-align: center;
        }

        /* Responsive Design for Small Screens */
        @media (max-width: 768px) {
            .form-container {
                margin: 40px 20px; /* Adjust margin for smaller screens */
                padding: 30px;
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2 class="hover-heading">Appointment</h2>

    <form action="cinsert_task.php" method="POST">
        <div class="form-group mb-3">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="service_type">Service Type:</label>
            <input type="text" name="service_type" id="service_type" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="request_time">Request Time:</label>
            <input type="datetime-local" name="request_time" id="request_time" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="phoneno">Phone Number:</label>
            <input type="text" name="phoneno" id="phoneno" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>

        <center><button type="submit" class="btn btn-custom" name="submit">Submit Request</button></center>
    </form>
    
    <p class="note">All fields are required.</p>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
