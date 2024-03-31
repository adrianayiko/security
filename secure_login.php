<?php
include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare statement
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);

// Execute statement
$stmt->execute();

// Get result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login successful";
} else {
    echo "Invalid username or password";
}

$stmt->close();
$conn->close();
?>
