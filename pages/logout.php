<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    session_destroy();
    header('location: logout.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Logged Out | Lifestyle Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/logout.css">
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div class="container">
        <div class="jumbotron text-center">
            <h1><span class="glyphicon glyphicon-log-out"></span></h1>
            <h2>Logged out successfully</h2>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>