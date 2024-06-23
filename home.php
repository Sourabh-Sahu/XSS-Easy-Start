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
    <title>Histudy - Home</title>
    <link rel="stylesheet" href="css/home.css">
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
            <li class="right">
                <form action="search.php" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                </form>
                
            </li>
            <li class="right">
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
    <h2>Courses</h2>
    <p>Courses that help beginner designers become true unicorns.</p>

    <div class="course-container">
            <!-- 1st Course Box -->
            <div class="course-box">
            <a href="course-details.php">
                <img src="image/2320056_4fa0_6.jpg" alt="">
            </a>
                <div class="course-content">
                    <h3>React Front To Back</h3>
                    <p>React Js long fact that a reader will be distracted by the readable.</p>
                </div>
                
                
            </div>

            <!-- 2nd Course Box -->
            <div class="course-box">
            <a href="course-details2.php">
                <img src="image/5331710_fc7f_3.jpg" alt="">
                    </a>
                <div class="course-content">
                    <h3>PHP Beginner + Advanced</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable.</p>
                </div>
                
            </div>

            <!-- 3rd Course Box -->
            <div class="course-box">
            <a href="course-details3.php">
                <img src="image/image1.jpg" alt="">
                    </a>
                <div class="course-content">
                    <h3>Angular Zero to Mastery</h3>
                    <p>Angular Js long fact that a reader will be distracted by the readable.</p>
                </div>
                
            </div>

            <!-- 4th Course Box -->
            <div class="course-box">
            <a href="course-details4.php">
                <img src="image/images2.jpg" alt="">
                    </a>
                <div class="course-content">
                    <h3>Web Front To Back</h3>
                    <p>Web Js long fact that a reader will be distracted by the readable.</p>
                </div>
                
            </div>

            <!-- 5th Course Box -->
            <div class="course-box">
            <a href="course-details5.php">
                <img src="image/images3.jpg" alt="">
                    </a>
                <div class="course-content">
                    <h3>SQL Beginner Advanced</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable.</p>
                </div>
                
            </div>

            <!-- 6th Course Box -->
            <div class="course-box">
            <a href="course-details6.php">
                <img src="image/images4.jpg" alt="">
                    </a>
                <div class="course-content">
                    <h3>JS Zero to Mastery</h3>
                    <p>JavaScript long fact that a reader will be distracted by the readable.</p>
                </div>
                
            </div>
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
    <main>
    </main>

	 <?php include 'footer.html'; ?>
</body>
</html>
