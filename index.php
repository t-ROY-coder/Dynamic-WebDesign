<?php
require 'pages/includes/common.php';
if(isset($_SESSION['email']))
{
    header('location: pages/product.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lifestyle Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(isset($_SESSION['email'])){
                    ?>
                    <li><a href = "pages/cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "pages/settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "pages/logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php
                    }
                    else{
                    ?>
                    <li><a href="pages/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="pages/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php
                    }?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div id="banner-image">
                <div class="container">
                    <div class="col-sm-6 col-sm-offset-3 jumbotron" id="banner-content">
                        <h2>We sell lifestyle.</h2>
                        <p>Flat 40% OFF on premium brands</p>
                        <br>
                        <a href="pages/product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container text-center" id="prod">
            <div class="col-sm-4">
                <a href="pages/product.php#cameras" class="thumbnail">
                    <img src="img/1.jpg" class="img-responsive">
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="pages/product.php#watches" class="thumbnail">
                    <img src="img/7.jpg" class="img-responsive">
                    <div class="caption">
                        <h2>Watches</h2>
                        <p>Original Watches from the best brands</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="pages/product.php#shirts" class="thumbnail">
                    <img src="img/8-1.jpg" class="img-responsive">
                    <div class="caption">
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
    include 'pages/includes/footer.php';
    ?>
</body>

</html>