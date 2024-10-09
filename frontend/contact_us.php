<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts for a cleaner font style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    
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


         /* Navigation Bar */
         .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: linear-gradient(135deg, #ffffff, #f0f0f0);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1000;
            transition: background 0.3s ease;
        }

        .navbar:hover {
            background: linear-gradient(135deg, #f0f0f0, #e6e6e6);
        }

        .navbar .logo {
            font-size: 2rem;
            font-weight: 600;
            color: #5161ce;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin-left: 30px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 1rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: color 0.3s ease, background-color 0.3s ease;
            display: flex;
            align-items: center;
        }

        .navbar ul li a:hover {
            color: white;
            background-color: #5161ce;
        }

        .navbar ul li a i {
            margin-right: 8px;
            font-size: 1.1rem;
            color: #5161ce;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover i {
            color: white;
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

      <!-- Navigation Bar -->
      <div class="navbar">
        <div class="logo">Home Services</div>
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-tools"></i>Services</a></li>
            <li><a href="#"><i class="fas fa-users"></i>About Us</a></li>
            <li><a href="http://localhost/Home%20Servises/frontend/contact_us.php"><i class="fas fa-envelope"></i>Contact</a></li>
            <li><a href="http://localhost/Home%20Servises/Admin_penal/user_login.php"><i class="fas fa-user-lock"></i>Login</a></li> 
            <li><a href="user_logout.php"><i class="fas fa-door-open"></i>Logout</a></li> 
        </ul>
      
    </div>

    <div class="form-container">
        <h2 class="hover-heading">Contact Us</h2>
        <form action="contact_view.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>

            <center><button type="submit" class="btn btn-custom" name="submit">Send Message</button></center>
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

if (isset($_REQUEST['submit'])) {
    
    // Retrieve and sanitize form data
    $name =$_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $message = $_REQUEST['message'];

    // Prepare the SQL query
    $sql = "INSERT INTO contact_us  VALUES (null,'$name','$email','$phone','$message')";

    // Prepare statement
    if (mysqli_query($conn,$sql)) {
       echo "inserted";
       

        
    } else {
        echo "Error preparing the SQL query: " .mysqli_error($conn);
    }
}


?>


