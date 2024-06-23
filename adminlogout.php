<?php
// Include the session check
include('session.php');

// Rest of your page content for profile.php
// This will only be executed if the user is logged in
?>
<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header('Location: index.html'); // Redirect to login page
exit(); 
?>
