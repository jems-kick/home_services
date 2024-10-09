<?php 
ob_start();
include('db_connect.php');

$result = mysqli_query($conn, "
    SELECT ur.*, w.name AS worker_name
    FROM user_requested_tasks ur
    LEFT JOIN workers w ON ur.worker_id = w.id
");

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Appointment Requests</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
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
            padding: 8px 10px; /* Reduced padding for smaller buttons */
            transition: background-color 0.3s ease;
            font-size: 0.9rem; /* Smaller font size for buttons */
        }
        
        .btn-primary {
            background-color: #0a3c72;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
        }
        
        .alert {
            margin-top: 20px;
            font-size: 1.2rem;
        }

        .form-inline {
            display: flex;
            justify-content: center; /* Center align the form elements */
            align-items: center; /* Center vertically */
        }

        .form-inline .form-control {
            margin-right: 5px; /* Space between dropdown and button */
            width: 150px; /* Set a fixed width for the dropdown */
            min-width: 100px; /* Minimum width to avoid it being too small */
        }
    </style>
</head>
<body>";

echo "<div class='d-flex justify-content-between align-items-center mb-4'>
<h2 class='hover-heading text-center flex-grow-1'>Available Services</h2>
<a href='form.php' class='btn btn-primary btn-sm'>Insert</a>
</div>";

echo "<div class='table-responsive'>
        <table class='table table-bordered table-striped table-hover'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Service</th>
                  
                    <th>Request Time</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Worker Assigned</th>
                    <th>Update Status</th>
                </tr>
            </thead>
            <tbody>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['username']}</td>";
    echo "<td>{$row['service_type']}</td>";
    echo "<td>{$row['request_time']}</td>";
    echo "<td>{$row['phoneno']}</td>";
    echo "<td>{$row['address']}</td>";
    echo "<td>{$row['status']}</td>";

    if ($row['status'] === 'assigned') {
        echo "<td>{$row['worker_name']}</td>";
        echo "<td>
                <form action='update_status.php' method='POST'>
                    <input type='hidden' name='request_id' value='{$row['id']}'>
                    <button type='submit' class='btn btn-primary btn-sm'>Update</button>
                </form>
              </td>";
    } else {
        echo "<td>
                <form action='assign_worker.php' method='POST' class='form-inline'>
                    <input type='hidden' name='request_id' value='{$row['id']}'>
                    <input type='hidden' name='requested_time' value='{$row['request_time']}'>
                    <div class='d-flex'>
                        <select name='worker_id' class='form-control'>
                            <option value=''>Select Worker</option>";

        $requested_time = $row['request_time'];
                        
        $availability_query = "
            SELECT w.*
            FROM workers w
            WHERE NOT EXISTS (
                SELECT 1
                FROM worker_assigned_tasks t
                WHERE t.worker_id = w.id
                AND t.status = 'pending'
                AND (
                    (DATE_SUB('$requested_time', INTERVAL 2 HOUR) <= t.assigned_time AND t.assigned_time <= DATE_ADD('$requested_time', INTERVAL 2 HOUR)) OR
                    (t.assigned_time BETWEEN DATE_SUB('$requested_time', INTERVAL 2 HOUR) AND DATE_ADD('$requested_time', INTERVAL 2 HOUR))
                )
            )
        ";

        $availability_result = mysqli_query($conn, $availability_query);
        
        while ($worker = mysqli_fetch_assoc($availability_result)) {
            echo "<option value='{$worker['id']}'>{$worker['name']}</option>";
        }

        echo "      </select>
                        <button type='submit' class='btn btn-primary btn-sm'>Assign</button>
                    </div>
                </form>
              </td>";
    }
    echo "</tr>";
}

echo "</tbody></table></div>";

mysqli_close($conn);

echo "</body></html>";
?>
