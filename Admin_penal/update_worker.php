<?php
include "db_connect.php"; // Include the database connection file

if (isset($_GET['id'])) {
    $workerid = $_GET['id'];

    // Fetch the existing worker details
    $sql = "SELECT * FROM workers WHERE id = $workerid";
    $result = mysqli_query($conn, $sql);
    $worker = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle the form submission for updating the worker
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];

    // Update query
    $update_sql = "UPDATE workers SET name = '$name', email = '$email', phone = '$phone', status = '$status' WHERE id = $workerid";
    
    if (mysqli_query($conn, $update_sql)) {
        header("Location: worker_view.php"); // Redirect after successful update
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Worker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <h2 class="hover-heading">Update Worker</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $worker['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $worker['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $worker['phone']; ?>" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required style="padding:15px;">
                <option value="available" <?php echo ($worker['status'] == 'available') ? 'selected' : ''; ?>>Available</option>
                <option value="unavailable" <?php echo ($worker['status'] == 'unavailable') ? 'selected' : ''; ?>>Unavailable</option>
            </select>
        </div>
        <center><button type="submit" class="btn-custom">Update Worker</button></center>
    </form>
</div>

</body>
</html>
