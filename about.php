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
    <title>Histudy - About</title>
    <link rel="stylesheet" href="css/about.css">

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
        <h2 class="highlight">🏆 The Leader in Online Learning</h2>
        
        <h1>Read About Our Mission and Planning.</h1>
        <p>Dive in and learn React.js from scratch! Learn Reactjs,</p>
        <p>Hooks, Redux, React Routing, Animations, Next.js</p> 
        <p>and way more!</p>
    <main>
    </main>
    <main>
    </main>
        <h3>ABOUT HISTUDY</h3>
        <h2>Welcome to Histudy for your skills with the best online courses.</h2>
        
        <p><strong>Histudy educational platform</strong> ipsum dolor sit amet consectetur adipisicing elit.</p>

        <p>Nam inventore praesentium alias incidunt! Veritatis, necessitatibus</p>
        <p>fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo</p>
        <p>provident nisi dolor similique architecto nihil.</p>

        
    </main>
    <style>
        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
        }
        .social-icons img {
            width: 20px;
            height: 20px;
        }
        .copyright {
            text-align: center;
            flex-grow: 1;
        }
    </style>
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

