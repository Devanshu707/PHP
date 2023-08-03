<?php
// Start the session
session_start();

// Connect to the database
$servername = "localhost";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "user_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $username;
            echo "Login successful. Welcome, $username!";
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>
