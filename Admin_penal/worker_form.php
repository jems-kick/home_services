<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts for modern font styles -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f3f7fa; /* Soft background */
            font-family: 'Roboto', sans-serif; /* Clean modern font */
            color: #333;
        }

        .form-container {
            max-width: 600px;
            margin: 40px auto; /* Centered on the page */
            padding: 40px;
            background-color: #fff; /* White background */
            border-radius: 12px; /* Slightly round corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
            transition: transform 0.3s;
        }

        .form-container:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 2px 6px #0664c9cc; /* More pronounced shadow */
        }

        .hover-heading {
            color: #5161ce; /* Default color */
            transition: color 0.3s, transform 0.3s; /* Smooth transition */
        }

        .hover-heading:hover {
            color: #0664c9cc; /* Hover color */
            transform: translateY(-3px); /* Slight lift on hover */
        }

        .form-container h2 {
            text-align: center;
            color: #515151;
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 1.75em;
        }

        .form-group input, .form-group select {
            border: 2px solid #ced4da; /* Thicker border */
            border-radius: 8px; /* Rounded corners */
            padding: 10px;
            transition: border-color 0.3s, box-shadow 0.3s; /* Smooth focus effect */
        }

        .form-group input:focus, .form-group select:focus {
            border-color: #0664c9cc; /* Focus border color */
            box-shadow: 0 0 10px rgba(65, 88, 166, 0.2); /* Slight glow */
        }

        .btn-custom {
            background-color: #0664c9cc; /* Custom dark blue */
            color: white;
            padding: 12px;
            font-weight: 700;
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s, transform 0.2s; /* Smooth hover */
        }

        .btn-custom:hover {
            background-color: #0056b3; /* Darker on hover */
            transform: translateY(-3px); /* Button lift effect */
        }

        /* Responsive Design for Small Screens */
        @media (max-width: 768px) {
            .form-container {
                margin: 20px;
                padding: 30px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2 class="hover-heading">Worker Form</h2>
        <form action="worker_form.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status" required style="padding:15px;">
                    <option value="active">Available</option>
                    <option value="inactive">Unavailable</option>
                </select>
            </div>

            <center><button type="submit" name="submit_btn" class="btn btn-custom">Submit</button></center>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


<?php

include "db_connect.php";

if (isset($_REQUEST['submit_btn'])) {
    
    // Retrieve and sanitize form data
    $name =$_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $status = $_REQUEST['status'];

    // Prepare the SQL query
    $sql = "INSERT INTO workers  VALUES (null,'$name','$email','$phone','$status')";

    // Prepare statement
    if (mysqli_query($conn,$sql)) {
        header('location:worker_view.php');
       

        
    } else {
        echo "Error preparing the SQL query: " .mysqli_error($conn);
    }
}


?>

