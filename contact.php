<?php
session_start();

// Establish a connection to the MySQL database
$host = "localhost"; // Replace with your MySQL server host
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "event"; // Replace with your MySQL database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    $name = sanitize($_POST["name"]);
    $email = sanitize($_POST["email"]);
    $message = sanitize($_POST["message"]);

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");

    if ($stmt) {
        // Bind the parameters and execute the statement
        $stmt->bind_param("sss", $name, $email, $message);
        if ($stmt->execute()) {
            // Redirect the user to a thank you page
            header("Location: event.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close the database connection
$conn->close();

// Sanitize user input
function sanitize($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/contact.css">
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2 style="font-size: 50px;">Contact Us</h2>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Sugar Camp, Road,<br>Pune</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>8945012094</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Physio@12.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST" action="">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" id="name" name="name" required="required">
                        <span>Full Name</span> 
                    </div>
                    <div class="inputBox">
                        <input type="email" id="email" name="email" required="required">
                        <span>Email</span> 
                    </div>
                    <div class="inputBox">
                        <textarea id="message" name="message" required="required"></textarea>
                        <span>Type your Message...</span> 
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
