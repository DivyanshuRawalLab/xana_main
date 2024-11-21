<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <link rel="stylesheet" href="assets\css\articles.css">
 <link rel="stylesheet" href="assets/css/styles.css">


</head>

<?php
ob_start();  // Start output buffering
// Your existing PHP code...
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$query = isset($_GET['query']) ? $_GET['query'] : '';
$blogs = isset($_SESSION['search_results']) ? $_SESSION['search_results'] : [];

// Clear session data
unset($_SESSION['search_results']);
unset($_SESSION['search_query']);
?>




<body>


<?php include("header.php"); ?>

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-3 mt-5 ps-5" style="font-size: small;">
                    <a class="d-block text-dark " href="">Collections</a><br>
                    <a class="d-block text-dark " href="">Supplements</a><br>
                    <a class="d-block text-dark " href="">Featured videos</a><br>
                    <a class="d-block text-dark " href="">reviewer <br> acknowledgements</a><br>
                </div>
                <div class="col-md-7 mt-5">
                    <div class="row">
                        <h3>Articles</h3>
                        <div class="col-md-12"  style="border: none;">
                          
                            

                            <div class="col-md-12 col-sm-12 col-12 col-lg-12 tab-content" id="recent-content">
                              <?php
                              include 'admin_db.php';

                                // Initialize variables
                                $searchResult = "";
                                $articleNumber = "";
                                $volumeId = "";
                                $sortingEnabled = true; // Default to true, meaning sorting is enabled

                                // Handle form submission
                                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['volume']) && isset($_POST['search_id'])) {
                                    $volumeId = $_POST['volume'];
                                    $articleNumber = $_POST['search_id'];

                                    // Disable sorting when a volume is selected
                                    $sortingEnabled = false;

                                    // Query to fetch data
                                    $stmt = $conn->prepare("
                                        SELECT sc.id, sc.volume, sc.article_number, p.title, p.content, p.date
                                        FROM search_by_citation sc
                                        JOIN posts p ON sc.post_id = p.id
                                        WHERE sc.id = ? AND sc.article_number = ?
                                    ");
                                    if (!$stmt) {
                                        die("Prepare failed: " . $conn->error);
                                    }
                                    $stmt->bind_param("is", $volumeId, $articleNumber);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $stmt->close();
                                }

                                // Fetch volumes for the dropdown
                                $sql = "SELECT id, volume FROM search_by_citation";
                                $result = $conn->query($sql);
                                $dropdownOptions = '<option value="">Select a volume</option>';
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $selected = ($row['id'] == $volumeId) ? 'selected' : '';
                                        $dropdownOptions .= '<option value="' . htmlspecialchars($row['id']) . '" ' . $selected . '>' . htmlspecialchars($row['volume']) . '</option>';
                                    }
                                } else {
                                    $dropdownOptions .= '<option value="">No volumes available</option>';
                                }
                              ?>
                              
                              <form method="POST" action="">
                                <input type="text" name="" id="search-query" placeholder="Enter article number" class="form-control d-inline" style="width:60%;">
                                <select name="volume" onchange="toggleInput(this)" class="form-select d-inline" style="width:26%; ">
                                  <?php echo $dropdownOptions; ?>
                                </select>      
                                </form>
                                <div class="row">
                                  <div class="col-md-12 col-lg-12 col-sm-12 col-12" id="search-results" style="<?php echo $showResults ? '' : 'display:none;'; ?>">
                                        
                                          <h5>1 result(s) for <b> <?php echo htmlspecialchars($query); ?></b></h5>
                                      
                                      <p class="fs-5 text-secondary">within BMC Bioinformatics</p>

                                      
                                  </div>
                                </div>

                                <div class="row">
                                <div class="col-8 my-4 pb-4" style="border-bottom: 1px solid rgb(180, 178, 178);">
                                    <p >Page 1 of 60</p>
                                </div>
                                <div class="col-4 my-4 pb-4" style="border-bottom: 1px solid rgb(205, 204, 204);">
                                    
                                <form method="GET" action="articles.php">
                                    <label for="sort">Sort by</label>
                                    <select name="sort" id="sort" onchange="this.form.submit()" disabled>
                                        <option value="">Relevance</option>
                                        <option value="DESC" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'DESC') echo 'selected'; ?>>Newest First</option>
                                        <option value="ASC" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'ASC') echo 'selected'; ?>>Oldest First</option>
                                    </select>
                                </form>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                              <div id="articles-results">
                                <?php if (!empty($blogs)): ?>
                                    <?php foreach ($blogs as $blog): ?>
                                        <div>
                                            <h5>
                                                <a href="presentation.php?post_id=<?php echo isset($blog['id']) ? urlencode($blog['id']) : ''; ?>" class="text-decoration-none">
                                                    <?php echo isset($blog['title']) ? htmlspecialchars($blog['title']) : 'Untitled'; ?>
                                                </a>
                                            </h5>
                                            <p><?php echo isset($blog['content']) ? htmlspecialchars($blog['content']) : 'No content available.'; ?></p>
                                            <p><em><?php echo isset($blog['date']) ? htmlspecialchars($blog['date']) : 'No date available.'; ?></em></p>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p>No articles found.</p>
                                <?php endif; ?>
                              </div>

                              </div>
                            </div>
                            </div>

                            <div class="col-md-12 tab-content" id="most-accessed-content">
                            <?php
                            include 'admin_db.php';
                                  
                                  // Initialize variables
                                  $searchResult = "";
                                  $articleNumber = "";
                                  $volumeId = "";
                                  $sortingEnabled = true; // Default to true, meaning sorting is enabled

                                  // Handle form submission
                                  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['volume']) && isset($_POST['search_id'])) {
                                      $volumeId = $_POST['volume'];
                                      $articleNumber = $_POST['search_id'];

                                      // Disable sorting when a volume is selected
                                      $sortingEnabled = false;

                                      // Query to fetch data
                                      $stmt = $conn->prepare("
                                          SELECT sc.id, sc.volume, sc.article_number, p.title, p.content, p.date
                                          FROM search_by_citation sc
                                          JOIN posts p ON sc.post_id = p.id
                                          WHERE sc.id = ? AND sc.article_number = ?
                                      ");
                                      if (!$stmt) {
                                          die("Prepare failed: " . $conn->error);
                                      }
                                      $stmt->bind_param("is", $volumeId, $articleNumber);
                                      $stmt->execute();
                                      $result = $stmt->get_result();

                                      if ($result->num_rows > 0) {
                                          while ($row = $result->fetch_assoc()) {
                                              $searchResult .= '<h6>' . htmlspecialchars($row['title']) . '</h6>';
                                              $searchResult .= '<p>' . htmlspecialchars($row['content']) . '</p>';
                                              $searchResult .= '<p>' . htmlspecialchars($row['date']) . '</p>'; 
                                          }
                                      } else {
                                          $searchResult = 'No data found for the selected volume and article number.';
                                      }
                                      $stmt->close();
                                  }

                                  // Fetch volumes for the dropdown
                                  $sql = "SELECT id, volume FROM search_by_citation";
                                  $result = $conn->query($sql);
                                  $dropdownOptions = '<option value="">Select a volume</option>';
                                  if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                          $selected = ($row['id'] == $volumeId) ? 'selected' : '';
                                          $dropdownOptions .= '<option value="' . htmlspecialchars($row['id']) . '" ' . $selected . '>' . htmlspecialchars($row['volume']) . '</option>';
                                      }
                                  } else {
                                      $dropdownOptions .= '<option value="">No volumes available</option>';
                                  }
                                ?>

                                
                    <div class="row">

                       
                        <div class="col-md-12">
                            <div class="row" >
                            <?php
                              ob_start(); // Start output buffering
                              include 'admin_db.php';


                              // Initialize $postsOutput
                              $postsOutput = "";

                              // Set default sorting order
                              $sort_order = "DESC"; // Default to "Newest First"
                              if (isset($_GET['sort']) && in_array($_GET['sort'], ['ASC', 'DESC'])) {
                                  $sort_order = $_GET['sort'];
                              }

                              // Get search query from URL
                              $query = isset($_GET['query']) ? trim($_GET['query']) : '';

                              if (!empty($query)) {
                                  // Prepare SQL query to search blog posts with sorting
                                  $sql = "SELECT title, content, date FROM posts WHERE title LIKE ? OR content LIKE ? ORDER BY date $sort_order";
                                  $stmt = $conn->prepare($sql);

                                  if ($stmt === false) {
                                      die("Failed to prepare SQL statement: " . $conn->error);
                                  }

                                  // Bind parameters and execute the statement
                                  $searchQuery = '%' . $query . '%';
                                  $stmt->bind_param('ss', $searchQuery, $searchQuery);
                                  $stmt->execute();
                                  $result = $stmt->get_result();

                                  if ($result === false) {
                                      die("Failed to execute SQL statement: " . $stmt->error);
                                  }

                                  // Fetch and display results
                                  // if ($result->num_rows > 0) {
                                  //     while ($row = $result->fetch_assoc()) {
                                  //         $postsOutput .= "<h5>" . htmlspecialchars($row["title"]) . "</h5>";
                                  //         $postsOutput .= "<p>" . htmlspecialchars($row["content"]) . "</p>";
                                  //         $postsOutput .= "<p>" . htmlspecialchars($row["date"]) . "</p>";
                                  //     }
                                  // } else {
                                  //     $postsOutput .= "<p>No results found</p>";
                                  // }

                                  $stmt->close();
                              } 
                              // else {
                              //     $postsOutput .= "<p>Please enter a search query.</p>";
                              // }

                              $conn->close();

                              // Output the results
                              echo $postsOutput;

                              ob_end_flush(); // Flush the output buffer
                            ?>
                                </div>
                            </div>
                    </div>
                    <div class="container">
      <div class="row">
      <div class="container-smile">
        <div class="feedback-box">
          <h2 class="feedback-header">How was your experience today?</h2>
          <div class="feedback-options">
            <div class="feedback-option" data-value="bad">
              <i class="far fa-frown"></i>&#128542;
            </div>
            <div class="feedback-option" data-value="ok">
              <i class="far fa-meh"></i>&#128528;
            </div>
            <div class="feedback-option" data-value="good">
              <i class="far fa-smile"></i>&#128578;
            </div>
            <div class="feedback-option" data-value="great">
              <i class="far fa-grin"></i>&#128515;
            </div>
          </div>
          <button class="feedback-button">Send feedback</button>
        </div>
      </div>
      </div>
    </div>
                  
            </div>

            

          <div class="col-md-2 mt-4">
            <div class="row">
              <div class="col-md-12">
                <div id="imp-info">
                  <h6 class="my-3">Important information</h6>
                  <a href="#">Editorial board</a><br><br>
                  <a href="#">For authors</a><br><br>
                  <a href="#">For editorial board members</a><br><br>
                  <a href="#">For reviewers</a><br><br>
                </div>
              </div>
              <div class="my-2 py-2" id="imp-info2">
                <a href="">Manuscript editing services</a>
              </div>
              <div class=" pb-4" id="imp-info3">
                <a href="">Contact Us</a>
              </div>
              <div class="pt-4" id="imp-info4">
                <div>
                  <h6 class="pb-4">Annual Journal Metrics</h6>
                  <p>Editor-in-Chief: DR. Kamal Rawal
                    Online ISSN:Not Assigned
                    Print ISSN:Not Assigned
                    Â© XANA, Noida</p>
                </div>

                <h6>Citation Impact 2023</h6>
                <p class="mb-4">Journal Impact Factor: 2.9
                  5-year Journal Impact Factor: 3.6
                  Source Normalized Impact per Paper (SNIP): 0.821
                  SCImago Journal Rank (SJR): 1.005</p>

                <h6>Speed 2023</h6>
                <p class="mb-4">Submission to first editorial decision (median days): 12
                  Submission to acceptance (median days): 146</p>
                
                <h6>Usage 2023</h6>
                <p class="mb-4">Downloads: 5,987,678 <br>
                  Altmetric mentions: 4,858</p>
                
                <div class="my-5">
                  <img src="https://tpc.googlesyndication.com/simgad/5747396451419067851" alt="" class="img-fluid" style="height: 40vh; width:100%">
                </div>
              
              </div>


            </div>
          </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
  </div>

  
  
  <div class="container-fluid" style="background-color: #215db8;">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="row py-1" style="border-bottom: 1px solid white;">
          <div class="col-md-3">
            <h3 class="text-white fw-bold fs-5 my-3 ">About Xana Portfolio</h3>
            <a class="text-white fs-5" href="about us.html">About us</a><br>
	          <a class="text-white fs-5" href="Press releases.html">Press releases</a><br>
	          <a class="text-white fs-5" href="press office.html">Press office</a><br>
            <a class="text-white fs-5" href="contact us.html">Contact us</a><br>
          </div>
          <div class="col-md-3">
            <h3 class="text-white fw-bold fs-5 my-3 ">Professional development</h3>
            <a class="text-white fs-5" href="about us.html">Xana Careers</a><br>
	          <a class="text-white fs-5" href="Press releases.html">Xana Conferences</a><br>
          </div>
          <div class="col-md-3">
            <h3 class="text-white fw-bold fs-5 my-3 ">Libraries &amp; institutions</h3>
            <a class="text-white fs-5" href="about us.html">Librarian service & tools</a><br>
	          <a class="text-white fs-5" href="Press releases.html">Librarian portal</a><br>
	          <a class="text-white fs-5" href="press office.html">Open research</a><br>
            <a class="text-white fs-5" href="contact us.html">Recommend to library</a><br>
          </div>
          <div class="col-md-3">
            <h3 class="text-white fw-bold fs-5 my-3 ">Advertising & partnerships</h3>
            <a class="text-white fs-5" href="about us.html">Advertising</a><br>
	          <a class="text-white fs-5" href="Press releases.html">Partnerships & Services</a><br>
	          <a class="text-white fs-5" href="press office.html">Media kits</a><br>
            <a class="text-white fs-5" href="contact us.html">Branded content</a><br>
          </div>
          <div class="col-md-3">
            <h3 class="text-white fw-bold fs-5 my-3 mt-5">Publishing policies</h3>
            <a class="text-white fs-5" href="about us.html">Xana portfolio policies</a><br>
	          <a class="text-white fs-5" href="Press releases.html">Open access</a><br>
          </div>
          <div class="col-md-3">
            <h3 class="text-white fw-bold fs-5 my-3 mt-5">Author &amp; Researcher services</h3>
            <a class="text-white fs-5" href="about us.html">Reprints &amp; permissions</a><br>
	          <a class="text-white fs-5" href="Press releases.html">Research data</a><br>
	          <a class="text-white fs-5" href="press office.html">Language editing</a><br>
            <a class="text-white fs-5" href="contact us.html">Scientific editing</a><br>
            <a class="text-white fs-5" href="contact us.html">Nature Masterclasses</a><br>
            <a class="text-white fs-5" href="contact us.html">Researce Solutions</a><br>
          </div>
          <div class="col-md-3">
            <h3 class="text-white fw-bold fs-5 my-3 mt-5">Discover content</h3>
            <a class="text-white fs-5" href="about us.html">Journals A-Z</a><br>
	          <a class="text-white fs-5" href="Press releases.html">Articles by subject</a><br>
	          <a class="text-white fs-5" href="press office.html">Xana Index</a><br>
          </div>
        </div>
        <div class="row my-5">
          <div class="col-md-12">
            <a class="text-white fs-6" href="">Privacy Policy</a>
            <a class="text-white mx-3 fs-6" href="">Use of cookies</a>
            <a class="text-white mx-3 fs-6" href=""> Your privacy choices/Manage cookies </a>
            <a class="text-white mx-3 fs-6" href="">Legal notice</a>
            <a class="text-white mx-3 fs-6" href="">Accessibility statement</a>
            <a class="text-white mx-3 fs-6" href="">Terms &amp; Conditions</a><br>
            <a class="text-white py-3 fs-6" href="">Your US state privacy rights</a>
          </div>
          <div class="col-md-12 my-3">
            <a href="index.html"><img src="C:\Users\LENOVO\Downloads\Xana Logo.png" style="height: 60px;width: 200px;background-color: white;"></a>
          </div>
          <div class="col-md-12">
            <p class="text-white">&copy; 2024 Xana Limited</p>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

<?php
ob_end_flush();  // Send the output buffer and turn off output buffering
?>
   
 <?php include("footer.php"); ?>




</body>
</html>