<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "event");

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Sanitize input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $email = mysqli_real_escape_string($conn, $email);

    // Check if username or email already exists
    $query = "SELECT * FROM user WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // User already exists
        ?>
        <script> alert("Username or email already exists. Please choose a different one.");</script>
      
        <?php
    } else {
        // Insert new user into database
        $insertQuery = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
        if (mysqli_query($conn, $insertQuery)) {
            // echo "Registration successful. You can now <a href='login.php'>login</a>.";
            header("Location: login.php"); 
        } else {
            echo "Error: " . mysqli_error($conn);
        }
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
    <title>Document</title>
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <form action="register.php" method="POST" onsubmit="return validateForm()">
                <h2>Register</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="confirm_password" id="confirm_password" required>
                    <label for="confirm_password">Confirm Password</label>
                </div>
                <div class="forget">
                    <a href="#">Forgot Password</a><br>
                    <button type="submit">Register</button>
                    <div class="register">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;

        if (username.trim() === "") {
            alert("Please enter a username");
            return false;
        }

        if (email.trim() === "") {
            alert("Please enter an email");
            return false;
        }

        if (password.trim() === "") {
            alert("Please enter a password");
            return false;
        }

        if (confirm_password.trim() === "") {
            alert("Please confirm your password");
            return false;
        }

        if (password !== confirm_password) {
            alert("Passwords do not match");
            return false;
        }

        return true;
    }
</script>
</body>
</html>
