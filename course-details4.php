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
    <title>Histudy - Course 4</title>
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
        <img src="image/images2.jpg" alt="Sample Image">
    </div>
    <div class="content">
    <h2>Become a Full-Stack Web Developer: The Ultimate "Web Front To Back" Course</h2>
        <p>In today’s digital age, the demand for skilled web developers is higher than ever. Full-stack developers, who possess the skills to work on both the front-end and back-end of web applications, are particularly sought after. If you're aiming to become a versatile web developer, our "Web Front To Back" course is designed to take you from a beginner to a proficient full-stack developer.</p>

        <h3>Why Full-Stack Development?</h3>
        <p>Full-stack development encompasses both client-side (front-end) and server-side (back-end) development, allowing you to build complete web applications from scratch. Here are a few reasons why full-stack development is an excellent career choice:</p>
        <ul>
            <li><strong>High Demand:</strong> Full-stack developers are highly sought after due to their versatility and comprehensive understanding of web development.</li>
            <li><strong>Complete Control:</strong> Being skilled in both front-end and back-end allows you to have full control over the development process, ensuring a seamless integration of all parts of an application.</li>
            <li><strong>Better Problem Solving:</strong> Understanding the full stack helps in diagnosing and solving issues more effectively, making you a more efficient developer.</li>
        </ul>

        <h3>What You'll Learn</h3>
        <p>Our "Web Front To Back" course is meticulously structured to cover all aspects of web development, ensuring a holistic learning experience. Here’s an overview of what you’ll master:</p>

        <h4>Front-End Development</h4>
        <ul>
            <li><strong>HTML & CSS:</strong> Building the structure and styling of web pages, including modern layout techniques like Flexbox and Grid.</li>
            <li><strong>JavaScript:</strong> Learning the fundamentals of JavaScript, including ES6+ features.</li>
            <li><strong>Responsive Design:</strong> Creating mobile-friendly websites using media queries and responsive design principles.</li>
            <li><strong>Front-End Frameworks:</strong> Mastering popular front-end frameworks like React, Angular, or Vue.js to build dynamic user interfaces.</li>
            <li><strong>CSS Preprocessors:</strong> Using Sass or LESS to write more maintainable and scalable CSS.</li>
            <li><strong>Version Control:</strong> Learning Git and GitHub for version control and collaboration.</li>
        </ul>

        <h4>Back-End Development</h4>
        <ul>
            <li><strong>Node.js:</strong> Understanding server-side JavaScript with Node.js, including building RESTful APIs.</li>
            <li><strong>Express.js:</strong> Using Express.js to create robust server-side applications.</li>
            <li><strong>Databases:</strong> Working with both SQL (MySQL, PostgreSQL) and NoSQL (MongoDB) databases, including CRUD operations and database design.</li>
            <li><strong>Authentication & Authorization:</strong> Implementing user authentication and authorization using JWT, OAuth, and other methods.</li>
            <li><strong>Server Management:</strong> Understanding server setup and management, including working with cloud platforms like AWS, Heroku, or DigitalOcean.</li>
            <li><strong>APIs:</strong> Creating and consuming RESTful and GraphQL APIs.</li>
        </ul>

        <h4>Full-Stack Integration</h4>
        <ul>
            <li><strong>MVC Architecture:</strong> Implementing the Model-View-Controller architecture for better code organization and maintainability.</li>
            <li><strong>State Management:</strong> Managing state in front-end applications using tools like Redux or Vuex.</li>
            <li><strong>Testing:</strong> Writing unit and integration tests for both front-end and back-end components to ensure code quality.</li>
            <li><strong>DevOps Basics:</strong> Learning the basics of continuous integration and deployment (CI/CD) pipelines, containerization with Docker, and automated testing.</li>
            <li><strong>Performance Optimization:</strong> Techniques for optimizing web application performance on both the front-end and back-end.</li>
            <li><strong>Deployment:</strong> Deploying web applications to production environments, including setting up domains and SSL certificates.</li>
        </ul>

        <h3>Who Should Take This Course?</h3>
        <p><strong>Beginners:</strong> Those new to web development will find a comprehensive introduction to both front-end and back-end technologies.</p>
        <p><strong>Intermediate Developers:</strong> Developers with some experience can enhance their skills and become proficient in full-stack development.</p>
        <p><strong>Advanced Developers:</strong> Experienced developers can stay updated with the latest trends and best practices in the web development world.</p>

        <h3>Conclusion</h3>
        <p>Mastering both front-end and back-end development opens up numerous opportunities in the web development field. Our "Web Front To Back" course is designed to equip you with the skills and knowledge needed to build fully functional, high-quality web applications. Ready to embark on your journey to becoming a full-stack web developer? Enroll today and transform your web development skills from front to back!</p>
    </div>
</div>
<div class="course-container">
    <div class="course-box">
        <section class="comments">
            <form class="comment-form" method="POST">
                <input type="hidden" name="course_id" value="4">
                <input type="text" name="comment" placeholder="Leave a comment">
                <button type="submit">Post Comment</button>
            </form>
        
        <div class="comments-list" data-course-id="4">
        <?php
require 'db.php';

// Handle new comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['course_id'] == 4) {
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

// Fetch and display comments for course_id = 4
$stmt = $conn->prepare("SELECT comment, user_information FROM comments WHERE course_id = 4");
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
</html
