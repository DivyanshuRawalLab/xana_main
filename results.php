<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$blogs = isset($_SESSION['search_results']) ? $_SESSION['search_results'] : [];
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Debugging output
echo '<pre>';
print_r($blogs);
echo '</pre>';

unset($_SESSION['search_results']);
unset($_SESSION['search_query']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Search Results for: <?php echo htmlspecialchars($query); ?></h1>

        <h2>Articles:</h2>
        <div id="articles-results">
            <?php if (!empty($blogs)): ?>
                <?php foreach ($blogs as $blog): ?>
                    <div class="mb-3">
                        <h5><?php echo htmlspecialchars($blog['title']); ?></h5>
                        <p><?php echo htmlspecialchars($blog['content']); ?></p>
                        <p><em><?php echo htmlspecialchars($blog['date']); ?></em></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No results found.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
