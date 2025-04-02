<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Event Management System</title>
</head>
<body>

    <h1>Login to Event Management System</h1>
    <form action="validate.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
   
    if (isset($_SESSION['error_message'])) {
        echo "<p style='color: red;'>".$_SESSION['error_message']."</p>";
        unset($_SESSION['error_message']);
    }
    ?>

</body>
</html>
