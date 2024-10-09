<?php 
ob_start();
?>

<?php
include "db_connect.php";

$sql = "SELECT * FROM services";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<div class='d-flex justify-content-between align-items-center mb-4'>
            <h2 class='hover-heading text-center flex-grow-1'>Available Services</h2>
            <a href='service_form.php' class='btn btn-primary btn-sm'>Insert</a>
          </div>";
    
    echo "<div class='table-responsive'>
            <table class='table table-bordered table-striped table-hover'>
                <thead>
                    <tr>
                        <th>Service ID</th>
                        <th>Service Name</th>
                        <th>Description</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr>";
        echo "<td>{$row['serviceid']}</td>";
        echo "<td>{$row['service_name']}</td>";
        echo "<td>{$row['description']}</td>";
        echo "<td>
                <a href='update_service.php?id={$row['serviceid']}' class='btn btn-primary btn-sm'>Update</a>
              </td>";

        echo "<td>
                <a href='delete_service.php?id={$row['serviceid']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this service?\");'>Delete</a>
              </td>";      
        echo "</tr>";
    }
    
    echo "</tbody></table></div>";
} else {
    echo "<p class='alert alert-warning text-center'>No data found!</p>";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Management</title>
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
            background-color: #c82333;
        }
        
        .alert {
            margin-top: 20px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
</body>
</html>
