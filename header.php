<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xana Bioinformatics</title>
  <link rel="stylesheet" href="css\styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


 </head>
<body>


<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <a href="index.php"><img src="assets\img\xana.png" width="200px" alt="logo"></a>
            </div>
            <div class="col-md-4 col-sm-12 my-3">
                <form id="searchForm" action="search.php" method="get">
                    <input type="text" placeholder="Search for articles..." class="form-control d-inline pt-1" id="query" name="query" required style="width: 75%;">
                    <button type="submit" class="btn btn-dark text-white d-inline"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </div>

  
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
          <a class="navbar-brand text-light" href="index.php">Bioinformatics</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list text-light fs-2"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    Publish With Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="publish_with_us.php">Publish With Us</a></li>
                        <li><a class="dropdown-item" href="for_author.php">For Authors</a></li>
                        <li><a class="dropdown-item" href="for_referees.php">For Referees</a></li>
                        <li><a class="dropdown-item" href="for_edirtorial_board.php">For Editorial Board</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    About the Journals
                    </a>
            
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="journals.php">About the Journals</a></li>
                    <li><a class="dropdown-item" href="journal_staff.php">Journal Staff</a></li>
                    <li><a class="dropdown-item" href="about_the_editor.php">About the Editor</a></li>
                    <li><a class="dropdown-item" href="journal_info.php
                    ">Journal information</a></li>
                    <li><a class="dropdown-item" href="journal_metrics.php">Journal Metrics</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    Explore Content
                    </a>
            
                    <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="explore_content.php">Explore Content</a></li>
                    <li><a class="dropdown-item" href="research_articles.php">Research Articles</a></li>
                    <li><a class="dropdown-item" href="news.php">News</a></li>
                    <li><a class="dropdown-item" href="opinion.php">Opinion</a></li>
                    <li><a class="dropdown-item" href="research_analysis.php">Research Analysis</a></li>
                    <li><a class="dropdown-item" href="careers.php">Careers</a></li>
                    <li><a class="dropdown-item" href="browse_issues.php">Browse issues</a></li>
                    <li><a class="dropdown-item" href="current_issues.php">Current issues</a></li>
                    <li><a class="dropdown-item" href="collections.php">Collections</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    Multimedia
                    </a>
            
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="masterclasses.php">Masterclasses</a></li>
                    <li><a class="dropdown-item" href="podcast.php">Podcast</a></li>
                    <li><a class="dropdown-item" href="videos.php">Videos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    Events by Xana
                    </a>
            
                    <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="events.php">Events by Xana</a></li>
                    <li><a class="dropdown-item" href="conferences.php">Conferences</a></li>
                    <li><a class="dropdown-item" href="webinars.php">Webinars</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    About Us
                    </a>
            
                    <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="about_us.php">About Us</a></li>
                    <li><a class="dropdown-item" href="contact_us.php">Contact Us</a></li>
                    <li><a class="dropdown-item" href="our_team.php">Our team</a></li>
                    <li><a class="dropdown-item" href="challenges_publication_industry.php">Challenges Publication Industry</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </nav>
        

    <div class="container-fluid" style="background-color: #fb7b06;">
        <div class="row">
        <div class="col-md-1 "></div>
        <div class="col-md-10">
            <div class="row" >
            <div class="col-md-12 d-flex gap-2 py-3">
                <a class="text-white" href="#" >Xana</a><i class="bi bi-caret-right text-white"></i>
                <a class="text-white" href="#">Publish</a><i class="bi bi-caret-right text-white"></i>
                <a class="text-decoration-none text-white" href="#">Bioinformatics</a>
            </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        </div>
    </div>

<div class="container-fluid" id="search-bg" style="background-color: rgb(160, 224, 231);">
    <div class="row">
      <div class="col-md-1 "></div>
      <div class="col-md-10">
        
        <div class="row" id="search-bg" style="background-color: rgb(160, 224, 231);">
          <div class="col-md-6 col-sm-12 my-2">
            <form id="searchForm" action="search.php" method="get" class="mb-2">
              <input type="text" placeholder="Search for articles..." class="form-control d-inline pt-1" id="query" name="query" required style="width: 75%;">
              <button type="submit" class="btn btn-dark text-white d-inline"><i class="bi bi-search"></i></button>
          </form>
          </div>
          <div class="col-md-6 col-sm-12 col-12">
            <p class="my-2 py-2">Submit manuscript</p>
          </div>
        </div>
      </div>
    </div>
</div>
 </header>
  <script src="assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
