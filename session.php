<?php
session_start();

// Check if the 'user' or 'admin' session variables are set
if (!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
    // Redirect to login page or any other page as needed
    header('Location: home.php'); // Redirect to your login page
    exit();
}
