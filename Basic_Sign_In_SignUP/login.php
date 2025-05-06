<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Internal CSS -->
    <style>
        body {
            background-color: #f2f2f2;
        }
        .login-form {
            max-width: 400px;
            margin: 80px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="login-form">
        <h2>Login</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100" name="submit">Login</button>
        </form>
    </div>

</body>
</html>

<?php
include 'db.php'; // Include database connection
session_start(); // Start the session at the beginning

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            // Verify the password entered by the user
            if (password_verify($password, $row['password'])) {
                // Store user data in the session
                $_SESSION['user_id'] = $row['id'];
              
                $_SESSION['email'] = $row['email'];

                // Redirect to welcome page
                header("Location: welcome.php");
                exit();
            } else {
                echo "<div class='alert alert-danger mt-3'>Incorrect password. Please try again.</div>";
            }
        } else {
            // Email not found in the database
            echo "<div class='alert alert-danger mt-3'>Email not found. Please check your email.</div>";
        }
    } else {
        // SQL error
        echo "<div class='alert alert-danger mt-3'>Error: " . mysqli_error($conn) . "</div>";
    }
}

mysqli_close($conn); // Close the database connection
?>
