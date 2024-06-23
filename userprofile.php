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
    <title>Histudy</title>
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
                <form action="home.php" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                </form>
                
            </li>
            <li class="right">
                <div class="dropdown">
                    <span>Account</span>
                    <div class="dropdown-content">
                        <a href="index.html" id="logout">Logout</a>
                        <a href="profile.php">Profile</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>

<?php
    $query = "";
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
    }

    // Load the JSON file
    $json = file_get_contents('courses.json');
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
        <ul>
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
