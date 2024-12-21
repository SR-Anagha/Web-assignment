<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Change if your database username is different
$password = ""; // Change if your database password is different
$dbname = "process"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


// Insert data into the users table
$sql = "INSERT INTO users (name, phone, email) VALUES ('$name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>