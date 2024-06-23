
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
    <title>Histudy - Course 1</title>
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
        <img src="image/2320056_4fa0_6.jpg" alt="Sample Image">
    </div>
    <div class="content">
        <h2>Mastering React: A Comprehensive Guide to Front-End Development</h2>
        <p>Are you looking to elevate your front-end development skills? Look no further than React—a powerful JavaScript library that simplifies the creation of interactive UIs. Whether you're a seasoned developer or just starting out, mastering React can open doors to endless possibilities in web development.</p>

        <h3>Why React?</h3>
        <p>React has revolutionized the way developers build user interfaces. Its component-based architecture allows for modular and reusable code, making it easier to maintain and scale projects. With its virtual DOM implementation, React ensures efficient rendering, resulting in faster and smoother user experiences. Moreover, its robust ecosystem and community support mean you can find solutions to almost any development challenge.</p>

        <h3>What You'll Learn</h3>
        <p>Our "React Front To Back" course is designed to take you from beginner to expert in no time. Here’s a glimpse of what you'll master:</p>
        <ul>
            <li>Getting Started: Setting up your development environment and understanding the basics of React.</li>
            <li>Building Components: Creating reusable components and organizing them effectively.</li>
            <li>State Management: Handling state using React's built-in features and advanced techniques like context API and Redux.</li>
            <li>Routing: Implementing client-side routing to create a seamless navigation experience.</li>
            <li>Hooks: Using React hooks to manage side effects, state, and more without writing class components.</li>
            <li>API Integration: Fetching data from APIs and integrating it into your React applications.</li>
            <li>Testing: Writing unit tests for React components to ensure functionality and reliability.</li>
            <li>Deployment: Deploying your React applications to production environments, including best practices.</li>
        </ul>

        <h3>Who Should Take This Course?</h3>
        <p>Beginners: New to web development or JavaScript? This course provides a solid foundation in React and modern front-end practices.</p>
        <p>Intermediate Developers: Already familiar with React basics? Dive deeper into advanced topics and enhance your skill set.</p>
        <p>Experienced Developers: Stay updated with the latest React features and best practices to maintain your competitive edge.</p>

        <h3>Conclusion</h3>
        <p>Whether you're aiming to build dynamic web applications, improve user interactions, or simply stay ahead in the ever-evolving field of front-end development, mastering React is a crucial step. Our "React Front To Back" course equips you with the knowledge and hands-on experience needed to succeed. Ready to take your skills to the next level? Enroll today and embark on your journey to becoming a React pro!</p>
    </div>
</div>
<div class="course-container">
    <div class="course-box">
        <section class="comments">
            <form class="comment-form" method="POST">
                <input type="hidden" name="course_id" value="1">
                <input type="text" name="comment" placeholder="Leave a comment">
                <button type="submit">Post Comment</button>
            </form>
            <div class="comments-list" data-course-id="1">
            <?php
require 'db.php';

// Handle new comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['course_id'] == 1) {
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
$stmt = $conn->prepare("SELECT comment, user_information FROM comments WHERE course_id = 1");
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
        </section>
    </div>
</div>
</body>
</html>
