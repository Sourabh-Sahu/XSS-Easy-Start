<?php
// Include the session check
include('session.php');

// Rest of your page content for profile.php
// This will only be executed if the user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histudy - Contact US</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul>
            <li class="form-wrapper">
                <form action="search.php" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                    
                </form>
            </li>
            <li>
                <div class="dropdown">
                    <span>Account</span>
                    <div class="dropdown-content">
                        <a href="logout.php" id="logout">Logout</a>
                        <a href="profile.php">Profile</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>

<main>
    <h3>Contact Us</h3>
    <h1>Histudy Course Contact - Join Us</h1>
    <p>We’re always in search of talented and motivated people. Don’t be shy, introduce yourself!</p>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collecting the form data
        $firstName = htmlspecialchars($_POST['first_name']);
        $lastName = htmlspecialchars($_POST['last_name']);
        $email = htmlspecialchars($_POST['email']);
        $mobileNumber = htmlspecialchars($_POST['mobile_number']);
        $state = htmlspecialchars($_POST['state']);
        $city = htmlspecialchars($_POST['city']);
     
        
       
    }
    ?>

    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number:</label>
                <input type="text" id="mobile_number" name="mobile_number" required>
            </div>
            <div class="form-group">
                <label for="state">Your State:</label>
                <input type="text" id="state" name="state" required>
            </div>
            <div class="form-group">
                <label for="city">Your City:</label>
                <input type="text" id="city" name="city" required>
            </div>
           
            <input type="submit" value="Submit" class="btn">
        </form>
    </div>
</main>



<script>
    document.getElementById("logout").addEventListener("click", function() {
        // Assuming the user profile is stored in a session
        // Clear the session
        sessionStorage.clear();
        // Redirect to index.html
        window.location.href = "index.html";
    });
</script>

<?php include 'footer.html'; ?>


</body>
</html>
