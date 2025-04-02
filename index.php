<?php session_start(); ?>

<?php

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
</head>
<body>

    <h1>Event Management System</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>

    <form action="process.php" method="POST">
        <label for="event_name">Event Name:</label><br>
        <input type="text" id="event_name" name="event_name" required><br><br>

        <label for="event_date">Event Date:</label><br>
        <input type="date" id="event_date" name="event_date" required><br><br>

        <label for="event_location">Event Location:</label><br>
        <input type="text" id="event_location" name="event_location" required><br><br>

        <label for="event_description">Event Description:</label><br>
        <textarea id="event_description" name="event_description" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
