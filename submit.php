<?php
// Retrieve form data
$fullName = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "connect";

$conn= new mysqli("localhost","root","","connect");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL query
$sql = "INSERT INTO students (full_name, email, gender) VALUES ('$fullName', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>