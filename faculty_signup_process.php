<?php
// faculty_signup_process.php

$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual password
$dbname = "class_attendance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$name = $conn->real_escape_string($_POST['name']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$mobile = $conn->real_escape_string($_POST['mobile']);
$email = $conn->real_escape_string($_POST['email']);
$higher_degree = $conn->real_escape_string($_POST['higher_degree']);
$department = $conn->real_escape_string($_POST['department']);
$doj = $_POST['doj'];
$loc = $conn->real_escape_string($_POST['loc']);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO faculty (name, password, mobile, email, higher_degree, department, doj, loc) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $password, $mobile, $email, $higher_degree, $department, $doj, $loc);

// Execute and check
if ($stmt->execute()) {
    echo "<script>alert('New faculty account created successfully'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
