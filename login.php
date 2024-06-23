    
<?php
session_start();

// Process the login form if it's submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('db.php');

    // Check if email and password are set
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Function to verify password
        function verify_password($password, $hash) {
            return password_verify($password, $hash);
        }

        // Check if admin
        $adminSql = "SELECT * FROM admin WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($adminSql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $adminResult = $stmt->get_result();

        if ($adminResult->num_rows > 0) {
            $_SESSION['admin'] = true;
            header('Location: adminprofile.php');
            exit();
        }

        // Check if regular user
        $userSql = "SELECT id, password FROM users WHERE email = ?";
        $stmt = $conn->prepare($userSql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $userResult = $stmt->get_result();

        if ($userResult->num_rows > 0) {
            $user = $userResult->fetch_assoc();
            if (verify_password($password, $user['password'])) {
                session_regenerate_id(true); // Regenerate session ID to prevent fixation attacks
                $_SESSION['user'] = $user['id'];
                header('Location: home.php');
                exit();
            }
        }

        // If invalid email or password
        echo "Invalid email or password";
    } else {
        echo "Email and password are required.";
    }

    $stmt->close();
    $conn->close();
} else {
    // Show the login form if the request method is not POST
    echo '<form action="login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
          </form>';
}
?>


