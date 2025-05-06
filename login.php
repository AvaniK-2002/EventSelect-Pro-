<?php
// Start session
session_start();

// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "event");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Retrieve user from database
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            // Authentication successful, create session
            $_SESSION['username'] = $username;
            // echo "login success";
            header("Location: event.php"); // Redirect to a protected page
        } else {
            // Invalid password script
            // locale_get_script("Invalid password. Please try again.");
           echo "<script>alert('Invalid password. Please try again.')</script>";
        }
    } else {
        // User not found
       // locale_get_script("User not found. Please register.");
     echo "<script>alert('User not found. Please register.')</script>";
    }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
<section>
    <div class="form-box">

        <div class="form-value">
            <form action="login.php" method="POST">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox" required>Remember Me </label>
                    <a href="#">Forgot Password</a><br>
                    <button>Log in</button>
                    <div class="register">
                        <p>Don't have an account <a href="register.php">Register</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
       
</body>
</html>
