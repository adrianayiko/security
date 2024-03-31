<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable CSRF Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Change Email</h1>
    <form action="change_email.php" method="post">
        <label for="email">New Email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Change Email">
    </form>
</body>
</html>
