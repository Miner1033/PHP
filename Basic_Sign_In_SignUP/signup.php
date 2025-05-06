<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Internal CSS -->
    <style>
        body {
            background-color: #f2f2f2;
        }
        .signup-form {
            max-width: 400px;
            margin: 80px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .signup-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="signup-form">
        <h2>Sign Up</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100" name="submit">Signup</button>
        </form>

        <!-- PHP Sign Up Logic -->
        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "<div class='alert alert-success mt-3'>Sign Up successful! <a href='login.php'>Login Here</a></div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>Error: " . mysqli_error($conn) . "</div>";
            }
        }
        ?>
    </div>

</body>
</html>
