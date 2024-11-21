
<!DOCTYPE html>
<html lang="en" class="grade-c">
<head>
    <title>Latest research and news by subject |  xana  </title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">       
</head>
<style>
    .bg-linear {
        background: linear-gradient(90deg, rgba(51,143,162,0.9668242296918768) 0%, rgba(14,9,121,0.9444152661064426) 52%);
    }
</style>

<body><!--<![endif]-->
 
    <?php  include("header.php"); ?>
    <div class="container my-5 bg-linear p-5 rounded text-white">
        <h1>Registration Form</h1>
        <form action="process_registration.php" method="post">
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="affiliation" class="form-label">Affiliation</label>
                <input type="text" class="form-control" id="affiliation" name="affiliation">
            </div>
            <div class="col-md-6">
                <label for="qualification" class="form-label">Highest Qualification</label>
                <input type="text" class="form-control" id="qualification" name="qualification">
            </div>   
            <div class="col-md-6 mb-3">
            <label for="user_type" class="form-label">User Type</label>
            <div class="">
                <input class="ms-3" type="checkbox" id="editor" name="user_type[]" value="editor">
                <label for="editor">Editor</label>
                <input class="ms-3" type="checkbox" id="potential_author" name="user_type[]" value="potential_author">
                <label for="potential_author">Potential Author</label>
                <input class="ms-3" type="checkbox" id="reviewer" name="user_type[]" value="reviewer">
                <label for="reviewer">Reviewer</label>
                <input class="ms-3" type="checkbox" id="advisor" name="user_type[]" value="advisor">
                <label for="advisor">Advisor</label>
            </div>
            </div>
        
            <div class="col-md-6 mt-3 d-grid">
            <button type="submit" class="btn btn-success">Register</button>
            </div>
</div>
        </form>
    </div>

<?php    include("footer.php"); ?>
</body>
</html>
