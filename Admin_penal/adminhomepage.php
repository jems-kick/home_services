<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts for a cleaner font style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Admin Panel Navbar</title>
    <style>
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
            position: relative;
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

        /* Dropdown Menu */
        .dropdown-menu, .nested-dropdown-menu {
            display: none;
            position: absolute;
            background: white;
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            min-width: 180px;
            z-index: 1001;
        }

        .navbar ul li:hover > .dropdown-menu {
            display: block;
        }

        .dropdown-menu a, .nested-dropdown-menu a {
            display: block;
            padding: 8px 20px;
            color: #333;
            text-decoration: none;
            white-space: nowrap;
            transition: background-color 0.3s ease;
        }

        .dropdown-menu a:hover, .nested-dropdown-menu a:hover {
            background-color: #f0f0f0;
        }

        /* Nested Dropdown Menu */
        .nested-dropdown-menu {
            top: 0;
            left: 180px;
            display: none;
            z-index: 1002;
        }

        .dropdown-menu li:hover > .nested-dropdown-menu {
            display: block;
        }

        .dropdown-menu a i, .nested-dropdown-menu a i {
            margin-right: 10px;
        }

        /* Image After Navbar */
        .navbar-image {
            width: 100%; /* Set to 100% for responsive behavior */
            max-width: 800px; /* Set a max-width for the image */
            height: auto; /* Maintain aspect ratio */
            margin: 20px auto; /* Center the image with margin */
            display: block; /* Display block to center */
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="logo">Admin Panel</div>
        <ul>
            <!-- Dropdown Menu for Worker -->
            <li>
                <a href="#" class="dropdown-toggle"><i class="fas fa-user-tie"></i>Worker</a>
                <div class="dropdown-menu">
                    <a href="http://localhost/Home%20Servises/Admin_penal/worker_view.php#">View Workers</a>
                    <a href="http://localhost/Home%20Servises/Admin_penal/worker_form.php#">Insert Worker</a>
                </div>
            </li>
            
            <!-- Dropdown Menu for Service -->
            <li>
                <a href="#" class="dropdown-toggle"><i class="fas fa-tools"></i>Service</a>
                <div class="dropdown-menu">
                    <a href="http://localhost/Home%20Servises/Admin_penal/service_view.php#">View Services</a>
                    <a href="http://localhost/Home%20Servises/Admin_penal/service_form.php#">Insert Service</a>
                </div>
            </li>

            <!-- Dropdown Menu for User -->
            <li>
                <a href="#" class="dropdown-toggle"><i class="fas fa-users"></i>User</a>
                <div class="dropdown-menu">
                    <a href="http://localhost/Home%20Servises/frontend/user_view.php">View Users</a>
                    
                </div>
            </li>

            <!-- Dropdown Menu for Appointment -->
            <li>
                <a href="#" class="dropdown-toggle"><i class="fas fa-calendar-check"></i>Appointment</a>
                <div class="dropdown-menu">
                    <a href="http://localhost/Home%20Servises/Admin_penal/Appointment.php">View Appointments</a>
                    
                </div>
            </li>

            <!-- Dropdown Menu for Contact -->
            <li>
                <a href="#" class="dropdown-toggle"><i class="fas fa-envelope"></i>Contact</a>
                <div class="dropdown-menu">
                    <a href="http://localhost/Home%20Servises/Admin_penal/contact_view.php">View Contacts</a>
                    
                </div>
            </li>

            <!-- Login and Logout Buttons -->
            <li>
                <a href="http://localhost/Home%20Servises/Admin_penal/login.php"><i class="fas fa-user-lock"></i>Login</a>
            </li>
            <li>
                <a href="logout.php"><i class="fas fa-door-open"></i>Logout</a>
            </li>
        </ul>
    </div>

    <!-- Image After Navbar -->
    <img src="3.jpg" alt="Admin Panel Image" class="navbar-image">

</body>
</html>
