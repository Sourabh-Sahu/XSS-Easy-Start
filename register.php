<?php
include('db.php');

$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are present
    if (!isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'])) {
        $error_message = "All fields are required";
    } else {
        // Sanitize user input
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        // Prepare SQL statement to check for existing email
        $check_sql = "SELECT id FROM users WHERE email = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            // Email already exists in the database
            $error_message = "Email already exists. Please use a different email address.";
        } else {
            // Prepare SQL statement to insert new user
            $insert_sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

            // Execute the insert statement
            if ($insert_stmt->execute()) {
                // Set session and redirect to profile page
                session_start();
                $_SESSION['user'] = $insert_stmt->insert_id;
                header('Location: home.php');
                exit();
            } else {
                // Handle errors
                $error_message = "Error: " . $insert_stmt->error;
            }

            // Close the insert statement
            $insert_stmt->close();
        }

        // Close the check statement
        $check_stmt->close();
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histudy</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="register-panel">
        <h2>Register</h2>
        <?php if (!empty($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form action="register.php" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Register</button>
            <p><a href="index.html">Sign In</a></p>
        </form>
    </div>
    <script src="register.js"></script>
</body>
</html>
