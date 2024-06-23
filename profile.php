<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: index.html');
    exit();
}

// Include database connection
include('db.php');

// Fetch user data from the database
$user_id = $_SESSION['user'];
$sql = "SELECT first_name, last_name FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histudy - User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            width: 97.9%;
            background-color: #567;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            align-items: center;
        }
        .header img {
            width: 30px;
            margin-right: 15px;
        }
        .header a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .profile-container {
            background-color: #444;
            padding: 100px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
            margin-top: 130px;
        }
        .profile-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #bbb;
            margin-bottom: 20px;
        }
        .profile-container input[type="text"], 
        .profile-container input[type="email"],
        input::file-selector-button {
        background-image: linear-gradient(
            to right,
            #ff7a18,
            #af002d,
            #319197 100%,
            #319197 200%
        );
        background-position-x: 0%;
        background-size: 200%;
        border: 0;
        border-radius: 8px;
        color: #fff;
        padding: 1rem 1.25rem;
        text-shadow: 0 1px 1px #333;
        transition: all 0.25s;
        }
        input::file-selector-button:hover {
        background-position-x: 100%;
        transform: scale(1.1);
        }
        .profile-container input[type="file"] {
            width: calc(100% - 22px);
            padding: 30px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            
        }
        .profile-container input[type="submit"], 
        .profile-container button {
            background-color: #5a9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .profile-container input[type="submit"]:hover,
        .profile-container button:hover {
            background-color: #47a;
        }
        .profile-container a {
            color: #9cf;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">    
        <a href="javascript:goBackOrHome()">
        <a id="backButton">Back</a>
        
        </a>
    </div>
    
    <div class="profile-container">
        <img src="image/blank-profile-picture.webp" alt="User Avatar">
        <h2><?php echo ($user['first_name']) . " " . ($user['last_name']); ?></h2>
        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <div class="file-input">
                <input type="file" name="file" id="file">
            </div>
            <button type="submit" name="upload">Upload</button>
        </form>
    </div>

   

    <script>
        // Extract the returnurl parameter from the URL
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        var returnUrl = getParameterByName('returnurl');
        if (returnUrl) {
            // Vulnerable to DOM-based XSS as returnUrl is not sanitized
            window.location.href = returnUrl;
        }

        document.getElementById('backButton').addEventListener('click', function() {
            if (returnUrl) {
                window.location.href = returnUrl;
            } else {
                // Redirect to home.php if no returnurl is provided
                window.location.href = 'home.php';
            }
        });
    </script>
</body>
</html>
<?php
if (isset($_POST['upload'])) {
    if ($_FILES['file']['error']) {
        $message = "<div class='message error'>Error uploading file</div>";
    } else {
        $filename = $_FILES["file"]["name"];
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename)) {
            // Directly inject the filename into the HTML to ensure XSS vulnerability
            $message = "<div class='message success'>File '" . $filename . "' uploaded successfully</div>";
        } else {
            $message = "<div class='message error'>Could not upload file</div>";
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card">
            <?php 
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>
    </div>
</body>
</html>
