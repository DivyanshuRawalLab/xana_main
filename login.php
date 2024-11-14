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

<?php include("header.php"); ?>
  
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




<?php include("footer.php"); ?>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
