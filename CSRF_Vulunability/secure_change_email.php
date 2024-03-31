<?php
session_start();

function updateEmail($email) {
    echo "Email updated to: " . $email;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $token = $_POST['csrf_token'];

    if ($token === $_SESSION['csrf_token']) {
        updateEmail($email);
    } else {
        echo "Invalid CSRF token.";
    }
}
?>
