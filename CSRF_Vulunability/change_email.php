<?php
// Simulate database update
function updateEmail($email) {
    echo "Email updated to: " . $email;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    updateEmail($email);
}

// Hypothetical scenario to illustrate CSRF vulnerability:
// An attacker could craft a malicious website with the following HTML form:
// <form action="http://yourwebsite.com/change_email.php" method="post">
//     <input type="hidden" name="email" value="attacker@example.com">
//     <input type="submit" value="Change Email">
// </form>
// If a user visits this malicious website, their browser would automatically submit the form,
// changing their email address to "attacker@example.com" without their consent.
?>
