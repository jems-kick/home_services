<?php

ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Service</title>

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
            margin-left: 400px;
            margin-top: 30px;
            padding: 40px;
            background-color: #fff; /* White background */
            border-radius: 12px; /* Slightly round corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Softer shadow */
            transition: transform 0.3s;
        }

        .form-container:hover {
            transform: translateY(-5px); /* Subtle lift on hover */
            box-shadow: 0 2px 10px #0664c9cc; /* More pronounced shadow */
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

        .form-group input, .form-group textarea {
            border: 2px solid #ced4da; /* Thicker border */
            border-radius: 8px; /* Rounded corners */
            padding: 10px;
            transition: border-color 0.3s, box-shadow 0.3s; /* Smooth focus effects */
        }

        .form-group input:focus, .form-group textarea:focus {
            border-color: #0664c9cc; /* Deep blue on focus */
            box-shadow: 0 0 10px rgba(65, 88, 166, 0.2); /* Slight glow */
        }

        .btn-custom {
            background-color: #0664c9cc; /* Custom dark blue */
            color: #fff;
            padding: 12px;
            font-weight: 700;
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s, transform 0.2s; /* Smoother hover */
        }

        .btn-custom:hover {
            background-color: #0056b3; /* Darker on hover */
            transform: translateY(-3px); /* Lift button */
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #666;
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
        <h2 class="hover-heading">Create a New Service</h2>
        <form action="service_form.php" method="POST">
            <div class="form-group">
                <label for="service_name">Service Name:</label>
                <input type="text" class="form-control" id="service_name" name="service_name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <center><button type="submit" name="submit_service" class="btn btn-custom">Submit</button></center>
        </form>
        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php

include 'db_connect.php';


if (isset($_POST['submit_service'])) {
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO services (service_name, description) VALUES ('$service_name', '$description')";

    
    if (mysqli_query($conn, $sql)) {
       header('location:service_view.php');
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($conn) . "</div>";
    }

    
    mysqli_close($conn);
}
?>



</body>
</html>
