<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_id = $_POST['course_id'];
    $comment = $_POST['comment'];

    if (!empty($comment) && !empty($course_id)) {
        $stmt = $conn->prepare("INSERT INTO comments (course_id, comment) VALUES (?, ?)");
        $stmt->bind_param("is", $course_id, $comment);
        
        if ($stmt->execute()) {
            echo "Comment successfully posted!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}

$conn->close();
?>
