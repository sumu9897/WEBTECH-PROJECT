<!-- Include Bootstrap CSS and JavaScript libraries in your HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="path-to-bootstrap-css/bootstrap.min.css">
    <!-- Include jQuery and Bootstrap JavaScript -->
    <script src="path-to-jquery/jquery.min.js"></script>
    <script src="path-to-bootstrap-js/bootstrap.min.js"></script>
</head>
<body>

<!-- Header -->
<div class="header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="header-left">
                
                <ul class="nav1 collapse navbar-collapse" id="navbarNav">
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="food-available.php">AVAILABLE FOOD LIST</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
                    <li class="nav-item"><a class="nav-link" href="donor/login.php">DONOR</a></li>
                    <!-- Uncomment the line below if you want to add an ADMIN link -->
                    <!-- <li class="nav-item"><a class="nav-link" href="admin/index.php">ADMIN</a></li> -->
                </ul>
            </div>
            <div class="header-right">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End of Header -->

<!-- Include Bootstrap JavaScript -->
<script>
    $(document).ready(function () {
        // Initialize Bootstrap JavaScript components if needed
    });
</script>

</body>
</html>
