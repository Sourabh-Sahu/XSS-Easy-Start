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
    <title>Histudy - Course 3</title>
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
        <img src="image/image1.jpg" alt="Sample Image">
    </div>
    <div class="content">
    <h2>Master Angular: The Ultimate Guide from Zero to Mastery</h2>
        <p>In the fast-paced world of web development, staying ahead of the curve is crucial. Angular, a robust and comprehensive framework maintained by Google, has become a vital tool for building dynamic single-page applications (SPAs). Whether you’re a novice developer or a seasoned professional looking to enhance your skills, our "Angular Zero to Mastery" course is designed to take you on an exciting journey from the basics to advanced concepts, empowering you to create powerful and efficient web applications.</p>

        <h3>Why Choose Angular?</h3>
        <p>Angular is a complete front-end framework that simplifies the development and testing of web applications. Here’s why Angular should be in your toolkit:</p>
        <ul>
            <li><strong>Component-Based Architecture:</strong> Encourages the creation of reusable and maintainable code.</li>
            <li><strong>Two-Way Data Binding:</strong> Automatically synchronizes data between the model and the view.</li>
            <li><strong>Dependency Injection:</strong> Makes your code more modular, testable, and reusable.</li>
            <li><strong>Rich Ecosystem:</strong> Offers a vast collection of libraries, tools, and community support.</li>
            <li><strong>Backed by Google:</strong> Ensures reliability and continuous improvement.</li>
        </ul>

        <h3>What You'll Learn</h3>
        <p>Our "Angular Zero to Mastery" course is structured to guide you through every step of Angular development, ensuring a comprehensive understanding of the framework. Here’s a sneak peek into what you’ll cover:</p>

        <h4>Beginner Level</h4>
        <ul>
            <li><strong>Introduction to Angular:</strong> Understanding what Angular is, its history, and why it's widely used.</li>
            <li><strong>Setting Up the Environment:</strong> Installing Node.js, Angular CLI, and creating your first Angular project.</li>
            <li><strong>Angular Basics:</strong> Learning about components, modules, and templates.</li>
            <li><strong>Data Binding and Directives:</strong> Exploring one-way and two-way data binding, structural directives (ngIf, ngFor), and attribute directives.</li>
            <li><strong>Working with Forms:</strong> Handling user input with template-driven and reactive forms.</li>
            <li><strong>Services and Dependency Injection:</strong> Creating and injecting services to share data and functionality.</li>
        </ul>

        <h4>Intermediate Level</h4>
        <ul>
            <li><strong>Routing and Navigation:</strong> Implementing navigation using Angular Router, creating routes, and protecting routes with guards.</li>
            <li><strong>HTTP Client:</strong> Making HTTP requests to fetch and send data to remote servers.</li>
            <li><strong>Pipes:</strong> Transforming data in templates with built-in and custom pipes.</li>
            <li><strong>Component Interaction:</strong> Communicating between parent and child components using @Input and @Output decorators.</li>
            <li><strong>State Management:</strong> Managing state in Angular applications with NgRx.</li>
        </ul>

        <h4>Advanced Level</h4>
        <ul>
            <li><strong>Advanced Component Patterns:</strong> Implementing content projection, dynamic components, and advanced component design patterns.</li>
            <li><strong>Optimizing Angular Applications:</strong> Improving performance with lazy loading, change detection strategies, and Ahead-of-Time (AOT) compilation.</li>
            <li><strong>Unit Testing:</strong> Writing unit tests for Angular components, services, and pipes using Jasmine and Karma.</li>
            <li><strong>End-to-End Testing:</strong> Performing end-to-end testing with Protractor.</li>
            <li><strong>Building and Deploying:</strong> Configuring build settings, environment configurations, and deploying your Angular application to production.</li>
            <li><strong>Advanced RxJS:</strong> Utilizing reactive programming and managing complex asynchronous operations with RxJS.</li>
            <li><strong>Angular Universal:</strong> Implementing server-side rendering for better SEO and performance.</li>
        </ul>

        <h3>Who Should Take This Course?</h3>
        <p><strong>Beginners:</strong> If you’re new to web development, this course provides a thorough introduction to Angular and modern front-end practices.</p>
        <p><strong>Intermediate Developers:</strong> Those with basic web development knowledge can deepen their understanding and master advanced Angular concepts.</p>
        <p><strong>Advanced Developers:</strong> Experienced developers can stay current with the latest Angular features and best practices to maintain their competitive edge.</p>

        <h3>Conclusion</h3>
        <p>Angular is a powerful tool that can significantly enhance your web development capabilities. Our "Angular Zero to Mastery" course is designed to equip you with the knowledge and practical experience needed to build sophisticated and high-performing web applications. Ready to transform your skills and master Angular? Enroll today and start your journey towards becoming an Angular expert!</p>
    </div>
</div>
<div class="course-container">
    <div class="course-box">
        <section class="comments">
            <form class="comment-form" method="POST">
                <input type="hidden" name="course_id" value="3">
                <input type="text" name="comment" placeholder="Leave a comment">
                <button type="submit">Post Comment</button>
            </form>
        
        <div class="comments-list" data-course-id="3">
        <?php
require 'db.php';

// Handle new comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['course_id'] == 3) {
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

// Fetch and display comments for course_id = 3
$stmt = $conn->prepare("SELECT comment, user_information FROM comments WHERE course_id = 3");
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
