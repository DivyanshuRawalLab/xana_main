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




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xana Bioinformatics</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/presentation.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    /* Style for the scrollable container */
    .scrollable-container {
            height: 700px; /* Set this to the desired height */
            overflow-y: scroll; /* Enable vertical scrolling */
            scrollbar-width: none;
        }
        
        /* Optional: style for highlighted section */
        .highlight {
            background-color: #f0f8ff; /* Highlight color */
        }
  </style>

</head>

<body>

  <!-- <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <a href="index.html"><img src="" alt="logo"></a>
      </div>
      <div class="col-md-4 col-sm-12 my-3">
        <form id="searchForm" action="search.php" method="get">
          <input type="text" placeholder="Search for articles..." class="form-control d-inline" id="query" name="query" required style="width: 75%;">
          <button type="submit" class="btn btn-dark text-white d-inline" style="width: 15%;"><i class="bi bi-search"></i></button>
      </form>
      </div>
    </div>
</div> -->

  <div class="container-fluid" style="background-color: #1884df;">
    <div class="row">
      <div class="col-md-1 "></div>
      <div class="col-md-10">
        <div class="row">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a href="index.html" class="text-white navbar-brand text-decoration-underline" style="font-size: 2.1rem;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Bioinformatics</a>
              <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class=" dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      Publish With Us
                    </a>
                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item" href="#">Publish With Us</a></li>
                      <li><a class="dropdown-item" href="#">Bioinformatics</a></li>
                      <li><a class="dropdown-item" href="#">For Authors</a></li>
                      <li><a class="dropdown-item" href="#">For Referees</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class=" dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      About the Journals
                    </a>

                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item" href="#">About the Journals</a></li>
                      <li><a class="dropdown-item" href="#">Journal Staff</a></li>
                      <li><a class="dropdown-item" href="#">About the Editor</a></li>
                      <li><a class="dropdown-item" href="#">Journal information</a></li>
                      <li><a class="dropdown-item" href="#">Journal Metrics</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class=" dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      Explore Content
                    </a>

                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item" href="#">Explore Content</a></li>
                      <li><a class="dropdown-item" href="#">Research Articles</a></li>
                      <li><a class="dropdown-item" href="#">News</a></li>
                      <li><a class="dropdown-item" href="#">Opinion</a></li>
                      <li><a class="dropdown-item" href="#">Research Analysis</a></li>
                      <li><a class="dropdown-item" href="#">Careers</a></li>
                      <li><a class="dropdown-item" href="#">Browse issues</a></li>
                      <li><a class="dropdown-item" href="#">Current issues</a></li>
                      <li><a class="dropdown-item" href="#">Collections</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class=" dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      Multimedia
                    </a>

                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item" href="#">Multimedia</a></li>
                      <li><a class="dropdown-item" href="#">Podcast</a></li>
                      <li><a class="dropdown-item" href="#">Videos</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class=" dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      Events by Xana
                    </a>

                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item" href="#">Events by Xana</a></li>
                      <li><a class="dropdown-item" href="#">Conferences</a></li>
                      <li><a class="dropdown-item" href="#">Webinars</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class=" dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      About Us
                    </a>

                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item" href="#">About Us</a></li>
                      <li><a class="dropdown-item" href="#">Contact Us</a></li>
                      <li><a class="dropdown-item" href="#">Our team</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>

  <div class="container-fluid" style="background-color: #fb7b06;">
    <div class="row">
      <div class="col-md-1 "></div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-12 d-flex gap-2 py-3">
            <a class="text-white" href="#">Xana</a><i class="bi bi-caret-right text-white"></i>
            <a class="text-white" href="#">Publish</a><i class="bi bi-caret-right text-white"></i>
            <a class="text-decoration-none text-white" href="#">Bioinformatics</a>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <!-- header ends -->


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-12">
          <?php
                include 'admin_db.php';

                // Initialize variables
                $postId = isset($_GET['post_id']) ? $_GET['post_id'] : '';

                if ($postId) {
                  // Prepare SQL query to fetch the blog post by its ID
                  $stmt = $conn->prepare("SELECT title, content, date FROM posts WHERE id = ?");
                  if ($stmt === false) {
                    die("Failed to prepare SQL statement: " . $conn->error);
                  }

                  // Bind the post ID parameter and execute the statement
                  $stmt->bind_param('i', $postId);
                  $stmt->execute();
                  $result = $stmt->get_result();

                  // Check if the post exists
                  if ($result->num_rows > 0) {
                    $post = $result->fetch_assoc();
                  } else {
                    echo "No article found with this ID.";
                    exit;
                  }

                  $stmt->close();
                } else {
                  echo "No post ID provided.";
                  exit;
                }

                $conn->close();
                ?>
                <div class="row" style="position: sticky; top:18%; position:fixed; background:#fff; z-index: 1;display:none;">
                  <div class="col-md-7">
                    <h5 class="my-3"><?php echo htmlspecialchars($post['title']); ?></h5>
                  </div>
                  <div class="col-md-4">
                  <div class="download-btn mt-2 mx-4 px-4">
                    <a href="" class="text-white text-start ps-4">Download <i class="bi bi-download py-5"></i></a>
                  </div>
                  </div>
                </div>
          </div>
        
          <div class="download-btn mt-2 down-btn">
            <a href="" class="text-white text-start ps-4">Download <i class="bi bi-download py-5"></i></a>
          </div>
          <div class="col-md-8 my-5 scrollable-container" >

            <div class="row ">
              <div class="col-md-12">

                <?php
                include 'admin_db.php';

                // Initialize variables
                $postId = isset($_GET['post_id']) ? $_GET['post_id'] : '';

                if ($postId) {
                  // Prepare SQL query to fetch the blog post by its ID
                  $stmt = $conn->prepare("SELECT title, content, date FROM posts WHERE id = ?");
                  if ($stmt === false) {
                    die("Failed to prepare SQL statement: " . $conn->error);
                  }

                  // Bind the post ID parameter and execute the statement
                  $stmt->bind_param('i', $postId);
                  $stmt->execute();
                  $result = $stmt->get_result();

                  // Check if the post exists
                  if ($result->num_rows > 0) {
                    $post = $result->fetch_assoc();
                  } else {
                    echo "No article found with this ID.";
                    exit;
                  }

                  $stmt->close();
                } else {
                  echo "No post ID provided.";
                  exit;
                }

                $conn->close();
                ?>
                <div class="row" style="position: sticky; top:1%">
                  <div class="col-md-12">
                    <span class="d-inline fs-6">Published: </span>
                    <p class="text-muted d-inline fs-6"><?php echo htmlspecialchars($post['date']); ?></p>
                    <h3 class="my-3" style="color:#215db8;"><?php echo htmlspecialchars($post['title']); ?></h3>
                    <div class="content">
                      <p class="mx-2 fs-5"><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            include 'admin_db.php';
            $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 1;

            if ($post_id > 0) {
                $sql = "SELECT * FROM presentations WHERE post_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $post_id);

                if ($stmt->execute()) {
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $sectionId = htmlspecialchars($row["section"]);
                            echo "<h3 id='data_{$sectionId}' style='color:#215db8;'>" . htmlspecialchars($row["section"]) . "</h3>";
                            echo "<p class='mx-2 fs-5'>" . htmlspecialchars($row["data"]) . "</p><br>";

                            if (!empty($row["image_data"])) {
                                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '" alt="Image" class="img-fluid"><br><br>';
                            }
                        }
                    } else {
                        echo "No results found for the specified post ID.";
                    }
                    $stmt->close();
                } else {
                    echo "Error executing the SQL statement: " . $conn->error;
                }
            } else {
                echo "Invalid post ID.";
            }
            $conn->close();
            ?>




          </div>
          <div class="col-md-4 sidebar-2">
            
            <div class="download-btn my-5">
              <a href="" class="text-white py-5 text-start ps-4">Download <i class="bi bi-download py-5"></i></a>
            </div>
            <div class="row" style="position: sticky; top:8%">
              <div class="col-md-12">
                <div class="tab" data-tab="recent">Sections</div>
                <div class="tab" data-tab="most-accessed">References</div>

              </div>
              <div class="col-md-12">
                <div class="tab-content m-3" data-content="recent" style="border: none;">
                  <div class="section" style="overflow-y: scroll; height:350px; scrollbar-width: thin; scrollbar-color: #215db8 #fff;">
                  <?php
                  include 'admin_db.php';

                  // Retrieve post_id from the request (e.g., ?post_id=1)
                  $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 1;

                  if ($post_id > 0) {
                      // Prepare SQL query to fetch data for the specified post_id
                      $sql = "SELECT * FROM presentations WHERE post_id = ?";

                      // Use prepared statements to prevent SQL injection
                      if ($stmt = $conn->prepare($sql)) {
                          $stmt->bind_param("i", $post_id);

                          if ($stmt->execute()) {
                              $result = $stmt->get_result();

                              if ($result->num_rows > 0) {
                                  // Output data of each row
                                  while ($row = $result->fetch_assoc()) {
                                      $sectionId = htmlspecialchars($row["section"]);
                                      echo "<a href='#' onclick='scrollToSection(\"{$sectionId}\"); return false;' style='border-left:2px solid #215db8;' class='ps-2'>" . htmlspecialchars($row["section"]) . "</a><br><br>";
                                  }
                              } else {
                                  echo "No results found for the specified post ID.";
                              }

                              $stmt->close();
                          } else {
                              echo "Error executing the SQL statement: " . $conn->error;
                          }
                      } else {
                          echo "Error preparing the SQL statement: " . $conn->error;
                      }
                  } else {
                      echo "Invalid post ID.";
                  }

                  $conn->close();
                  ?>


                  </div>
                </div>

                <div class="col-md-12 ">
                  <div class="tab-content m-3" data-content="most-accessed" style="border: none;">
                    <p>1. Cannone JJ, Subramanian S, Schnare MN, Collett JR, D'Souza LM, Du Y, Feng B, Lin N, Madabusi LV, Müller KM, Pande N, Shang Z, Yu N, Gutell RR: <b> The Comparative RNA Web (CRW) Site: an online database of comparative sequence and structure information for ribosomal, intron, and other RNAs.</b> BMC Bioinformatics 2002, 3: 2. <br><a href="">[http://www.biomedcentral.com/1471–2105/3/2]</a> 10.1186/1471-2105-3-2</p>
                    <div class="reflink">
                      <a href="#">Article</a>
                      <a href="#">PubMed Central</a>
                      <a href="#">PubMed</a>
                      <a href="#">Google Scholar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>



  <!-- footer starts -->
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

  <script src="assets/js/script.js"></script>
  <script src="assets/js/articles.js"></script>
  <script src="assets/js/presentation.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <?php
  ob_end_flush();  // Send the output buffer and turn off output buffering
  ?>


</body>

</html>