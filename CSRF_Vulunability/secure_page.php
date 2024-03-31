<?php
session_start();
$token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $token;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secure CSRF Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Change Email</h1>
    <form action="secure_change_email.php" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
        <label for="email">New Email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Change Email">
    </form>
</body>
</html>
