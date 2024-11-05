<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xana Bioinformatics</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets//css//styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

 </head>
<body>


<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <a href="index.php"><img src="Xana Logo.png" width="200px" alt="logo"></a>
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
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">Bioinformatics</a>
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
                        <li><a class="dropdown-item" href="#">Publish With Us</a></li>
                        <li><a class="dropdown-item" href="#">Bioinformatics</a></li>
                        <li><a class="dropdown-item" href="#">For Authors</a></li>
                        <li><a class="dropdown-item" href="#">For Referees</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    About the Journals
                    </a>
            
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">About the Journals</a></li>
                    <li><a class="dropdown-item" href="#">Journal Staff</a></li>
                    <li><a class="dropdown-item" href="#">About the Editor</a></li>
                    <li><a class="dropdown-item" href="#">Journal information</a></li>
                    <li><a class="dropdown-item" href="#">Journal Metrics</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    Multimedia
                    </a>
            
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Multimedia</a></li>
                    <li><a class="dropdown-item" href="#">Podcast</a></li>
                    <li><a class="dropdown-item" href="#">Videos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    Events by Xana
                    </a>
            
                    <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="#">Events by Xana</a></li>
                    <li><a class="dropdown-item" href="#">Conferences</a></li>
                    <li><a class="dropdown-item" href="#">Webinars</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none" href="#" data-bs-toggle="dropdown" aria-expanded="false">
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
