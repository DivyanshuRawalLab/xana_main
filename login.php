<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .dropdown-item:hover{
        background-color: #1884df;
        }
        .dropdown{
        margin: 0.9rem;
        }
    </style>
</head>
<body>
    
  <div class="container-fluid" style="background-color: #1884df;">
    <div class="row">
      <div class="col-md-1 "></div>
      <div class="col-md-10">
        <div class="row">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <a href="index.html" class="text-white navbar-brand text-decoration-underline" style="font-size: 2.1rem;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Bioinformatics</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 shadow">
            <h2 class="my-3 text-center">Admin Login</h2>
            <form action="admin_panel.php" method="POST">
                <div class="mb-3 mx-5">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                </div>
                <div class="mb-3 mx-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3 mx-5">Login</button>
            </form>
        </div>
        <div class="col-md-3"></div>
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


  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
