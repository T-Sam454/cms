<?php session_start(); ?>

<?php

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}


if (isset($_SESSION['event_data'])) {
    $event = $_SESSION['event_data'];
} else {
    $event = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
</head>
<body>

    <h1>Event Details</h1>

    <?php if ($event): ?>
        <h2><?php echo $event['event_name']; ?></h2>
        <p><strong>Date:</strong> <?php echo $event['event_date']; ?></p>
        <p><strong>Location:</strong> <?php echo $event['event_location']; ?></p>
        <p><strong>Description:</strong> <?php echo $event['event_description']; ?></p>
    <?php else: ?>
        <p>No event data found.</p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">Go back to submit another event</a>

</body>
</html>
