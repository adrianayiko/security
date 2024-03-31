<?php
// Simulate database update
function updateEmail($email) {
    echo "Email updated to: " . $email;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    updateEmail($email);
}
?>
