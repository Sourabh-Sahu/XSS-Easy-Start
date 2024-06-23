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
    <title>Histudy - Course 6</title>
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
        <img src="image/images4.jpg" alt="Sample Image">
    </div>
    <div class="content">
    <h2>Master JavaScript: The Ultimate "JavaScript Zero to Mastery" Course</h2>
        <p>In the world of web development, JavaScript is the powerhouse that brings websites and web applications to life. Whether you’re a complete beginner or an experienced developer looking to deepen your expertise, our "JavaScript Zero to Mastery" course is designed to transform your skills from foundational knowledge to advanced mastery.</p>

        <h3>Why Learn JavaScript?</h3>
        <p>JavaScript is an essential language for modern web development. Here’s why mastering JavaScript is crucial:</p>
        <ul>
            <li><strong>Ubiquity:</strong> JavaScript is used by 97.6% of all websites, making it a fundamental skill for web developers.</li>
            <li><strong>Versatility:</strong> JavaScript can be used for both front-end and back-end development, thanks to Node.js.</li>
            <li><strong>Interactivity:</strong> It allows developers to create dynamic and interactive user interfaces.</li>
            <li><strong>Vast Ecosystem:</strong> A rich ecosystem of libraries and frameworks (like React, Angular, and Vue.js) makes JavaScript development efficient and fun.</li>
            <li><strong>Community Support:</strong> An extensive and active community means abundant resources and support.</li>
        </ul>

        <h3>What You'll Learn</h3>
        <p>Our "JavaScript Zero to Mastery" course is meticulously structured to guide you through the entire spectrum of JavaScript development, ensuring a comprehensive understanding of the language and its applications. Here’s an overview of what you’ll master:</p>

        <h4>Beginner Level</h4>
        <ul>
            <li><strong>Introduction to JavaScript:</strong> Understanding what JavaScript is, its history, and its role in web development.</li>
            <li><strong>Setting Up Environment:</strong> Setting up a development environment, including browsers, editors, and the console.</li>
            <li><strong>Basic Syntax:</strong> Learning the basics of JavaScript syntax, including variables, data types, and operators.</li>
            <li><strong>Control Structures:</strong> Mastering conditional statements (if, else, switch) and loops (for, while).</li>
            <li><strong>Functions:</strong> Understanding how to define and invoke functions, including function expressions and arrow functions.</li>
            <li><strong>DOM Manipulation:</strong> Learning to interact with the Document Object Model (DOM) to dynamically update content.</li>
        </ul>

        <h4>Intermediate Level</h4>
        <ul>
            <li><strong>Objects and Arrays:</strong> Working with complex data structures like objects and arrays, and utilizing array methods.</li>
            <li><strong>Events:</strong> Handling user interactions with event listeners and event handling.</li>
            <li><strong>Asynchronous JavaScript:</strong> Understanding asynchronous programming, including callbacks, promises, and async/await.</li>
            <li><strong>Error Handling:</strong> Implementing error handling with try, catch, and throw.</li>
            <li><strong>APIs and AJAX:</strong> Fetching data from external APIs using AJAX and the Fetch API.</li>
            <li><strong>ES6+ Features:</strong> Exploring modern JavaScript features like destructuring, template literals, modules, and more.</li>
        </ul>

        <h4>Advanced Level</h4>
        <ul>
            <li><strong>Advanced Functions:</strong> Delving into advanced function concepts like closures, higher-order functions, and IIFE (Immediately Invoked Function Expressions).</li>
            <li><strong>Object-Oriented Programming:</strong> Implementing OOP principles in JavaScript, including classes, inheritance, and polymorphism.</li>
            <li><strong>Functional Programming:</strong> Applying functional programming concepts and techniques in JavaScript.</li>
            <li><strong>JavaScript Design Patterns:</strong> Learning common design patterns and best practices for writing maintainable code.</li>
            <li><strong>Web Performance Optimization:</strong> Techniques for optimizing JavaScript performance, including debouncing, throttling, and minimizing DOM manipulation.</li>
            <li><strong>Testing and Debugging:</strong> Writing unit tests with frameworks like Jest, and mastering debugging techniques.</li>
            <li><strong>Front-End Frameworks:</strong> Introduction to popular frameworks like React, Angular, or Vue.js to build dynamic single-page applications (SPAs).</li>
            <li><strong>Node.js and Backend Development:</strong> Using Node.js for server-side JavaScript, building RESTful APIs, and working with databases.</li>
        </ul>

        <h3>Who Should Take This Course?</h3>
        <p><strong>Beginners:</strong> Those new to programming or web development will find a solid foundation in JavaScript and modern web practices.</p>
        <p><strong>Intermediate Developers:</strong> Developers with some experience can deepen their understanding and move on to advanced topics.</p>
        <p><strong>Advanced Developers:</strong> Experienced developers can stay current with the latest JavaScript features and best practices to maintain their competitive edge.</p>

        <h3>Conclusion</h3>
        <p>JavaScript is the cornerstone of modern web development, and mastering it opens up a world of possibilities. Our "JavaScript Zero to Mastery" course is designed to equip you with the skills and knowledge needed to build powerful, dynamic, and efficient web applications. Ready to take your JavaScript skills to the next level? Enroll today and start your journey towards becoming a JavaScript master!</p>
    </div>
</div>
<div class="course-container">
    <div class="course-box">
        <section class="comments">
            <form class="comment-form" method="POST">
                <input type="hidden" name="course_id" value="6">
                <input type="text" name="comment" placeholder="Leave a comment">
                <button type="submit">Post Comment</button>
            </form>
            
        <div class="comments-list" data-course-id="6">
        <?php
require 'db.php';

// Handle new comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['course_id'] == 6) {
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

// Fetch and display comments for course_id = 6
$stmt = $conn->prepare("SELECT comment, user_information FROM comments WHERE course_id = 6");
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
