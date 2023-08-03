<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h1>User Login</h1>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>
</body>
</html>
