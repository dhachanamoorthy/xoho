<!doctype html>
<?php
    include('php/sessionManager.php');
?>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>STAFF MANAGEMENT SYSTEM</title>
</head>

<body onload="$('.loader').removeClass('is-active')">
    <div class="loader loader-border is-active" data-text="Loading..."></div>
    <div class="dashboard-main-wrapper">
         <?php
            include('components/header.php');
            include('components/sidebar.php');
        ?>
        <div class="dashboard-wrapper">
            <?php
                include('pages/profile.php');
                include('components/footer.php');
            ?>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/libs/js/custom.js"></script>
</body>
 
</html>