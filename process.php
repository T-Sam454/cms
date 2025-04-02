<?php session_start();


$error_message = '';


if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  
    if (empty($_POST['event_name'])) {
        $error_message .= "Event Name is required.<br>";
    } else {
        $event_name = htmlspecialchars($_POST['event_name']);
    }

   
    if (empty($_POST['event_date'])) {
        $error_message .= "Event Date is required.<br>";
    } else {
        $event_date = htmlspecialchars($_POST['event_date']);
    }

    if (empty($_POST['event_location'])) {
        $error_message .= "Event Location is required.<br>";
    } else {
        $event_location = htmlspecialchars($_POST['event_location']);
    }

   
    if (empty($_POST['event_description'])) {
        $error_message .= "Event Description is required.<br>";
    } else {
        $event_description = htmlspecialchars($_POST['event_description']);
    }

    
    if (!empty($error_message)) {
        $_SESSION['error_message'] = $error_message;
        header('Location: index.php');
        exit();
    }

    
    $_SESSION['event_data'] = [
        'event_name' => $event_name,
        'event_date' => $event_date,
        'event_location' => $event_location,
        'event_description' => $event_description
    ];

   
    header('Location: display.php');
    exit();
}
?>
