<?php
// Include the session check
include('session.php');

// Rest of your page content for profile.php
// This will only be executed if the user is logged in
?>
<?php
$conn = new mysqli('localhost', 'root', 'root', 'xss_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histudy - Admin</title>
</head>
<body>
    <header>
        <h1>Admin Profile</h1>
        <nav>
            
            <a href="adminlogout.php">Logout</a>
        </nav>
    </header>
    
    <section>
        <h2>Registered Users</h2>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Registration Time</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['reg_time']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </section>
</body>
</html>
<?php $conn->close(); ?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Information</title>
    <link rel="stylesheet" href="css/adminprofile.css">
</head>
<body>

    <!-- Content here -->
</body>
</html>
