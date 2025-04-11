<?php
$servername = "localhost";
$username = "root"; // Change if you have a different user
$password = ""; // Change if you have a password
$database = "php_db"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$course = $_POST['course'];
$ph_no = $_POST['ph_no'];
$address = $_POST['address'];

// Prepare and execute SQL query
$sql = "INSERT INTO USER (name, age, email, course, ph_no, address) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sissss", $name, $age, $email, $course, $ph_no, $address);

if ($stmt->execute()) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
