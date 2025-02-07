<?php
// student_signup_process.php

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
$register_number = $conn->real_escape_string($_POST['register_number']);
$name = $conn->real_escape_string($_POST['name']);
$mobile = $conn->real_escape_string($_POST['mobile']);
$email = $conn->real_escape_string($_POST['email']);
$study = $conn->real_escape_string($_POST['study']);
$branch = $conn->real_escape_string($_POST['branch']);
$dob = $_POST['dob'];
$doj = $_POST['doj'];
$loc = $conn->real_escape_string($_POST['loc']);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO student (register_number, name, mobile, email, study, branch, dob, doj, loc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $register_number, $name, $mobile, $email, $study, $branch, $dob, $doj, $loc);

// Execute and check
if ($stmt->execute()) {
    echo "<script>alert('New student account created successfully'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
