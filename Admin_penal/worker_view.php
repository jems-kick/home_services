
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            color: #333;
            margin: 20px;
        }

        .hover-heading:hover {
            color: #0664c9;
            cursor: pointer;
            transform: translateY(-3px);
        }

        h2 {
            color: #343a40;
            margin-bottom: 0;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
        }

        .table {
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #0a3c72;
            color: white;
            text-align: center;
            padding: 15px;
        }

        .table th, .table td {
            padding: 15px;
            vertical-align: middle;
            text-align: center;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .table-hover tbody tr:hover {
            background-color: #e2e6ea;
        }

        .btn {
            padding: 8px 12px;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #0a3c72;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #0a3c72;
            border: none;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
        }

        .alert {
            margin-top: 20px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<?php

include "db_connect.php";

$sql = "SELECT * FROM workers";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<div class='d-flex justify-content-between align-items-center mb-4'>
            <h2 class='hover-heading text-center flex-grow-1'>Worker Details</h2>
            <a href='worker_form.php' class='btn btn-primary btn-sm'>Insert Worker</a>
          </div>";
    
    echo "<div class='table-responsive'>
            <table class='table table-bordered table-striped table-hover'>
                <thead>
                    <tr>
                        <th>Worker ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['status']}</td>";
        echo "<td><a href='update_worker.php?id={$row['id']}' class='btn btn-primary btn-sm'>Update</a></td>";
        echo "<td><a href='delete_worker.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this worker?\");'>Delete</a></td>";
        echo "</tr>";
    }
    
    echo "</tbody></table></div>";
} else {
    echo "<p class='alert alert-warning text-center'>No workers found!</p>";
}

mysqli_close($conn);
?>

</body>
</html>
