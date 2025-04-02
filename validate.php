<?php
session_start();


$valid_username = "admin";
$valid_password = "password123"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if ($username === $valid_username && $password === $valid_password) {
       
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

       
        header('Location: index.php');
        exit();
    } else {
        
        $_SESSION['error_message'] = "Invalid username or password.";
        header('Location: login.php');
        exit();
    }
}
?>
