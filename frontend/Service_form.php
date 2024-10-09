<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .form-container {
            margin: 50px auto;
            width: 40%; /* Reduced the form width */
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px #bbdefb;
        }
        .small-btn {
            padding: 6px 12px;
            font-size: 14px;
            width: auto; /* Changed button width */
        }
    </style>
</head>
<body>

    <div class="container form-container">
        <h2 class="text-center mb-4">Service Form</h2>
        <form>
            <!-- Service ID -->
            <div class="mb-3">
                <label for="serviceId" class="form-label">Service ID</label>
                <input type="text" class="form-control" name="service_id" placeholder="Enter service ID" required>
            </div>

            <!-- Service Name -->
            <div class="mb-3">
                <label for="serviceName" class="form-label">Service Name</label>
                <input type="text" class="form-control" name="service_name" placeholder="Enter service name" required>
            </div>

            <!-- Service Description -->
            <div class="mb-3">
                <label for="serviceDescription" class="form-label">Service Description</label>
                <textarea class="form-control" name="service_description" placeholder="Enter service description" rows="4" required></textarea>
            </div>

            <!-- Submit Button -->
            <center><button type="submit" class="btn btn-primary small-btn">Submit</button></center>
        </form>
    </div>

    
</body>
</html>
