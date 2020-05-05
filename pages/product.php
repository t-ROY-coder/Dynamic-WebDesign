<?php
require 'includes/common.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Products | Lifestyle Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/product.css">
</head>

<body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to our <b>Lifestyle Store</b>!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
        <div class="row text-center" id="cameras">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/5.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Canon EOS</h3>
                        <p>Price: Rs. 36,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(1)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=1" name="id" value="1" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/2.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Samsung DSLR</h3>
                        <p>Price: Rs. 40,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(2)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=2" name="id" value="2" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/3.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs. 50,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(3)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=3" name="id" value="3" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/4.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs. 80,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(4)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=4" name="id" value="4" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="watches">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/9.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price: Rs. 13,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(5)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=5" name="id" value="5" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/10.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs. 3,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(6)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=6" name="id" value="6" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/11.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price: Rs. 8,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(7)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=7" name="id" value="7" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/12.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Price: Rs. 18,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(8)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=8" name="id" value="8" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shirts">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/8.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price: Rs. 800/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(9)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=9" name="id" value="9" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/6.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price: Rs. 1,000/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(10)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=10" name="id" value="10" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/13.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price: Rs. 1,500/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(11)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=11" name="id" value="11" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/14.jpg" class="img-responsive">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price: Rs. 1,300/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart(12)){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=12" name="id" value="12" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php'
    ?>
</body>

</html>