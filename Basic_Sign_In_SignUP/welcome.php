<?php
session_start(); // Start session at the very beginning

// Check if the user is logged in by verifying the session variables
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Internal CSS -->
    <style>
        body {
            background-color: #f2f2f2;
        }
        .welcome-container {
            max-width: 600px;
            margin: 80px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .welcome-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
       
        <p>Your email: <?php echo $_SESSION['email']; ?></p>
        <p><a href="logout.php" class="btn btn-danger">Logout</a></p>
    </div>

</body>
</html>
