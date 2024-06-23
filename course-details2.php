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
    <title>Histudy - Course 2</title>
    <link rel="stylesheet" href="css/course-details.css">
    <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            .header {
                width: 97.9%;
                background-color: #333;
                color: #fff;
                padding: 15px 20px;
                display: flex;
                align-items: center;
            }
            .header a {
                color: #fff;
                text-decoration: none;
                display: flex;
                align-items: center;
            }
            .header img {
                width: 30px;
                margin-right: 15px;
            }
            
            .container {
                padding: 20px;
                text-align: center;
            }
            .image-container img {
                max-width: 100%;
                border-radius: 8px;
                margin-bottom: 20px;
                box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            }
            .content {
                text-align: left;
                max-width: 800px;
                margin: 0 auto;
            }
            /* Comment Section Styles */
            .comments {
                margin-top: 30px;
                margin-bottom: 100px;
                padding: 20px;
                border: 1px solid #ced4da;
                border-radius: 1px;
                background-color: #f8f9fa;

                /* Additional properties */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  /* Adds a subtle shadow effect */
                font-family: Arial, sans-serif;           /* Sets the font family */
                font-size: 14px;                          /* Sets the font size */
                color: #333;                              /* Sets the text color */
                line-height: 1.5;                         /* Sets the line height for better readability */
                margin-left: auto;                        /* Centers the box horizontally within its container */
                margin-right: auto;                       /* Centers the box horizontally within its container */
                max-width: 600px;                         /* Sets a maximum width to ensure it doesn't get too wide */
                min-width: 200px;                         /* Sets a minimum width to ensure it doesn't get too narrow */
                transition: transform 0.3s, box-shadow 0.3s; /* Adds transition effects for smooth changes */

                /* Additional properties for styling */
                text-align: center;                       /* Centers the text horizontally */
                background-image: linear-gradient(to bottom, #f8f9fa, #e9ecef); /* Adds a gradient background */
                overflow: hidden;                         /* Ensures content does not overflow the box */
                padding-bottom: 30px;                     /* Adds extra padding at the bottom */
            }

            .comments:hover {
                transform: scale(1.05);                  /* Slightly enlarges the box on hover */
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increases the shadow on hover */
            }

            .comments h2 {
                font-size: 1.5em;
                margin-bottom: 20px;
                color: #343a40;
            }

            .comment-form {
                margin-bottom: 20px;
            }

            .comment-form input[type="text"] {
                width: calc(50% - 20px);
                padding: 10px;
                border: 1px solid #ced4da;
                border-radius: 5px;
                font-size: 1em;
                margin-right: 10px;
                margin-bottom: 10px;
            }

            .comment-form button {
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                background-color: #343a40;
                color: #fff;
                cursor: pointer;
                font-size: 1em;
                transition: background-color 0.3s, transform 0.3s; /* Adds transitions for background and transform */
            }

            .comment-form button:hover {
                background-color: #495057;  /* Changes button color on hover */
                transform: translateY(-2px); /* Slightly raises the button on hover */
            }

            .comment-list {
                list-style-type: none;
                padding: 0;
            }

            .comment {
                margin-top: 10px;
                padding: 10px;
                border: 1px solid #ced4da;
                border-radius: 8px;
                background-color: #fff;
                color: #495057;
                text-align: left;
            }
        </style>
</head>

<body>

<header>
    
    <div class="header">
        <a href="home.php">
            <img src="" alt=""> Back
        </a>
    </div>
    
</header>   

<div class="container">
    <div class="image-container">
        <img src="image/5331710_fc7f_3.jpg" alt="Sample Image">
    </div>
    <div class="content">
    <h2>In the Ever-Evolving World of Web Development</h2>
        <p>PHP stands out as a powerful, server-side scripting language that is both versatile and widely used. Whether you're just starting your journey into web development or looking to enhance your skills, our "PHP Beginner to Advanced" course is designed to help you master PHP from the ground up.</p>

        <h3>Why Learn PHP?</h3>
        <p>PHP (Hypertext Preprocessor) is a foundational language for creating dynamic websites and web applications. Here’s why PHP is a great choice:</p>
        <ul>
            <li><strong>Widely Used:</strong> PHP powers nearly 80% of websites on the internet, including major platforms like WordPress and Facebook.</li>
            <li><strong>Easy to Learn:</strong> With a syntax similar to HTML, PHP is accessible for beginners.</li>
            <li><strong>Highly Versatile:</strong> From simple web pages to complex web applications, PHP can handle it all.</li>
            <li><strong>Strong Community Support:</strong> A large and active community means plenty of resources and support.</li>
        </ul>

        <h3>What You'll Learn</h3>
        <p>Our comprehensive "PHP Beginner to Advanced" course is designed to take you from zero to hero. Here’s a breakdown of what you’ll cover:</p>

        <h4>Beginner Level</h4>
        <ul>
            <li><strong>Introduction to PHP:</strong> Understanding what PHP is, its history, and its role in web development.</li>
            <li><strong>Setting Up Environment:</strong> Installing PHP, setting up a local server (XAMPP, WAMP), and creating your first PHP script.</li>
            <li><strong>Basic Syntax:</strong> Learning PHP syntax, variables, data types, and operators.</li>
            <li><strong>Control Structures:</strong> Mastering conditional statements (if, else, switch) and loops (for, while).</li>
            <li><strong>Functions:</strong> Creating and using functions, understanding scope and parameters.</li>
            <li><strong>Working with Forms:</strong> Handling user input via HTML forms, GET and POST methods.</li>
        </ul>

        <h4>Intermediate Level</h4>
        <ul>
            <li><strong>Arrays:</strong> Understanding indexed and associative arrays, array functions, and looping through arrays.</li>
            <li><strong>Working with Files:</strong> Reading from and writing to files, handling file uploads.</li>
            <li><strong>Session Management:</strong> Using sessions and cookies to store user data.</li>
            <li><strong>Error Handling:</strong> Implementing error and exception handling to improve code reliability.</li>
            <li><strong>Introduction to MySQL:</strong> Setting up a MySQL database, performing CRUD operations (Create, Read, Update, Delete) with PHP.</li>
        </ul>

        <h4>Advanced Level</h4>
        <ul>
            <li><strong>Object-Oriented Programming (OOP):</strong> Understanding classes, objects, inheritance, and polymorphism in PHP.</li>
            <li><strong>Advanced MySQL:</strong> Using prepared statements, transactions, and database security.</li>
            <li><strong>MVC Architecture:</strong> Learning the Model-View-Controller pattern for organized and scalable applications.</li>
            <li><strong>Building a PHP Framework:</strong> Creating a mini-framework to understand how larger frameworks (like Laravel) work.</li>
            <li><strong>Security Best Practices:</strong> Implementing best practices to secure your PHP applications, including input validation, password hashing, and preventing SQL injection.</li>
            <li><strong>Integrating APIs:</strong> Connecting your PHP application with external APIs (e.g., RESTful services).</li>
            <li><strong>Deployment:</strong> Deploying your PHP application to a live server, managing domains, and SSL certificates.</li>
        </ul>

        <h3>Who Should Take This Course?</h3>
        <p><strong>Beginners:</strong> If you’re new to programming or web development, this course provides a thorough introduction to PHP.</p>
        <p><strong>Intermediate Developers:</strong> Those with some experience in web development can solidify their PHP skills and move on to advanced topics.</p>
        <p><strong>Advanced Developers:</strong> Experienced developers can stay up-to-date with the latest PHP features and best practices.</p>

        <h3>Conclusion</h3>
        <p>PHP remains a cornerstone of web development, and mastering it can significantly boost your career prospects. Our "PHP Beginner to Advanced" course is meticulously designed to equip you with the knowledge and hands-on experience required to build robust and dynamic web applications. Ready to dive into the world of PHP? Enroll today and start your journey towards becoming a PHP expert!</p>
    </div>
</div>
<div class="course-container">
    <div class="course-box">
        <section class="comments">
            <form class="comment-form" method="POST">
                <input type="hidden" name="course_id" value="2">
                <input type="text" name="comment" placeholder="Leave a comment">
                <button type="submit">Post Comment</button>
            </form>
        
        <div class="comments-list" data-course-id="2">
        <?php
require 'db.php';

// Handle new comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['course_id'] == 2) {
    $course_id = $_POST['course_id'];
    $comment = $_POST['comment'];

    // Fetch the logged-in user's name
    
    $user_id = $_SESSION['user'];
    $stmt = $conn->prepare("SELECT first_name, last_name FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $user_name = $user['first_name'] . ' ' . $user['last_name'];
    $stmt->close();

    if (!empty($comment) && !empty($course_id)) {
        $stmt = $conn->prepare("INSERT INTO comments (course_id, comment, user_information) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $course_id, $comment, $user_name);

        if ($stmt->execute()) {
            echo "Comment successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Comment cannot be empty.";
    }
}

// Fetch and display comments for course_id = 1
$stmt = $conn->prepare("SELECT comment, user_information FROM comments WHERE course_id = 2");
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo "<div class='comment'>";
    echo "<strong>" . ($row['user_information']) . ":</strong> ";
    echo ($row['comment']);
    echo "</div>";
}
$stmt->close();
$conn->close();
?>
        </div>
    </div>
    </section>
</div>
</body>
</html>
