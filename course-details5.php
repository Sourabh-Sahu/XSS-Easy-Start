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
    <title>Histudy - Course 5</title>
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
        <img src="image/images3.jpg" alt="Sample Image">
    </div>
    <div class="content">
    <h2>Master SQL: The Ultimate Guide from Beginner to Advanced</h2>
        <p>In today’s data-driven world, SQL (Structured Query Language) is an essential skill for anyone looking to excel in fields such as data science, database administration, and software development. Whether you're a novice eager to learn the basics or a seasoned professional looking to sharpen your skills, our "SQL Beginner to Advanced" course is designed to take you through every aspect of SQL, empowering you to manage and analyze data with confidence.</p>

        <h3>Why Learn SQL?</h3>
        <p>SQL is the backbone of data management and analysis, providing the foundation for interacting with relational databases. Here’s why SQL is a must-have skill:</p>
        <ul>
            <li><strong>Data Management:</strong> SQL is used to manage and manipulate data in relational databases, which are foundational to most businesses.</li>
            <li><strong>High Demand:</strong> Proficiency in SQL is a highly sought-after skill in many industries, including finance, healthcare, and technology.</li>
            <li><strong>Versatility:</strong> SQL knowledge is applicable to various database systems like MySQL, PostgreSQL, Oracle, and SQL Server.</li>
            <li><strong>Data Analysis:</strong> SQL is crucial for data analysis tasks, enabling you to extract valuable insights from large datasets.</li>
        </ul>

        <h3>What You'll Learn</h3>
        <p>Our "SQL Beginner to Advanced" course is designed to provide a thorough understanding of SQL, covering everything from the basics to complex queries and database management. Here’s an overview of what you’ll master:</p>

        <h4>Beginner Level</h4>
        <ul>
            <li><strong>Introduction to SQL:</strong> Understanding what SQL is, its history, and its importance in database management.</li>
            <li><strong>Database Basics:</strong> Learning about relational databases, tables, and the basics of database design.</li>
            <li><strong>Basic Queries:</strong> Writing simple SELECT statements to retrieve data from a database.</li>
            <li><strong>Filtering Data:</strong> Using WHERE clauses to filter data, including logical operators and comparison operators.</li>
            <li><strong>Sorting and Limiting Results:</strong> Sorting results with ORDER BY and limiting the number of results with LIMIT.</li>
            <li><strong>Aggregate Functions:</strong> Using functions like COUNT, SUM, AVG, MIN, and MAX to perform calculations on data.</li>
        </ul>

        <h4>Intermediate Level</h4>
        <ul>
            <li><strong>Joins:</strong> Understanding different types of joins (INNER JOIN, LEFT JOIN, RIGHT JOIN, FULL JOIN) to combine data from multiple tables.</li>
            <li><strong>Subqueries:</strong> Writing subqueries to perform more complex queries and retrieve data.</li>
            <li><strong>Grouping Data:</strong> Using GROUP BY and HAVING clauses to group and filter aggregated data.</li>
            <li><strong>Modifying Data:</strong> Performing INSERT, UPDATE, and DELETE operations to modify data in a database.</li>
            <li><strong>Database Design:</strong> Learning about normalization, primary keys, foreign keys, and relationships between tables.</li>
            <li><strong>Indexes:</strong> Understanding indexes and their role in optimizing query performance.</li>
        </ul>

        <h4>Advanced Level</h4>
        <ul>
            <li><strong>Advanced Joins:</strong> Mastering advanced join techniques and self-joins for more complex queries.</li>
            <li><strong>Window Functions:</strong> Using window functions to perform calculations across a set of table rows related to the current row.</li>
            <li><strong>Stored Procedures and Functions:</strong> Creating and using stored procedures and functions for reusable SQL code.</li>
            <li><strong>Triggers:</strong> Implementing triggers to automatically perform actions in response to specific events in the database.</li>
            <li><strong>Transaction Management:</strong> Understanding transactions, commit, rollback, and savepoints to ensure data integrity.</li>
            <li><strong>Performance Tuning:</strong> Techniques for optimizing query performance, including analyzing query execution plans and indexing strategies.</li>
            <li><strong>Security Best Practices:</strong> Implementing best practices for securing databases, including user permissions and data encryption.</li>
        </ul>

        <h3>Who Should Take This Course?</h3>
        <p><strong>Beginners:</strong> Those new to SQL will find a comprehensive introduction to relational databases and SQL.</p>
        <p><strong>Intermediate Users:</strong> Individuals with basic SQL knowledge can deepen their understanding and tackle more complex queries.</p>
        <p><strong>Advanced Users:</strong> Experienced professionals can refine their skills, learn advanced techniques, and stay up-to-date with the latest trends and best practices.</p>

        <h3>Conclusion</h3>
        <p>SQL is a fundamental skill for anyone involved in data management and analysis. Our "SQL Beginner to Advanced" course is meticulously designed to equip you with the knowledge and practical experience needed to handle real-world database challenges effectively. Ready to take your SQL skills to the next level? Enroll today and start your journey towards becoming an SQL expert!</p>
    </div>
</div>
<div class="course-container">
    <div class="course-box">
        <section class="comments">
            <form class="comment-form" method="POST">
                <input type="hidden" name="course_id" value="5">
                <input type="text" name="comment" placeholder="Leave a comment">
                <button type="submit">Post Comment</button>
            </form>
       
        <div class="comments-list" data-course-id="5">
        <?php
require 'db.php';

// Handle new comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['course_id'] == 5) {
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

// Fetch and display comments for course_id = 5
$stmt = $conn->prepare("SELECT comment, user_information FROM comments WHERE course_id = 5");
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
