<?php
// Include the session check
include('session.php');

// Rest of your page content for profile.php
// This will only be executed if the user is logged in
?>
<?php


setcookie('admin', 'admin', time() + (60 * 60 * 24 * 7));	
$_SESSION['admin'] = 'admin';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Histudy</title>
    <link rel="stylesheet" href="css/home.css">
    <style>
        /* Add CSS for grid layout */
        
        .results-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns */
            gap: 20px; /* Gap between items */
            list-style: none; /* Remove the black dots */
            padding: 0; /* Remove default padding */
        }
        .course-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            margin: 0; /* Ensure there's no additional margin */
        }
        .course-box img {
            width: 380.95px;
            height: 243.95px;
        }
        .course-content {
            padding: 10px;
        }
    </style>
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

<?php
    $query = ""; // Initialize $query
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
        
        if (!preg_replace('/[a-z\d\_\-\.]/i', "" , $_GET['query'])) {

    } else {
        echo "<h2>" . ($query) . "</h2>"; // Use htmlspecialchars to avoid XSS
    }
}
?>

<?php
    $query = "";
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
    }

    // Load the JSON file
    $json = file_get_contents('search.json');
    $courses = json_decode($json, true);

    // Filter courses based on the query
    $results = [];
    if (!empty($query)) {
        foreach ($courses as $course) {
            if (strpos(strtolower($course['title']), strtolower($query)) !== false || 
                strpos(strtolower($course['content']), strtolower($query)) !== false) {
                $results[] = $course;
            }
        }
    } else {
        $results = $courses;
    }
?>

<main>
    <h1>Search Results</h1>
    <?php if (empty($results)) : ?>
        <p>No results found for "<?php echo htmlspecialchars($query); ?>"</p>
    <?php else : ?>
        <ul class="results-grid">
            <?php foreach ($results as $result) : ?>
                <li>
                    <div class="course-box">
                        <img src="<?php echo $result['image']; ?>" alt="">
                        <div class="course-content">
                            <h3><?php echo htmlspecialchars($result['title']); ?></h3>
                            <p><?php echo htmlspecialchars($result['content']); ?></p>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</main>

<script>
    document.getElementById("logout").addEventListener("click", function() {
        sessionStorage.clear();
        window.location.href = "index.html";
    });
</script>
</body>
</html>
