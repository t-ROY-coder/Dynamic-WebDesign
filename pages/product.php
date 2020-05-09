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
        <div class="row text-center">
            <?php
            $i = 1;
            $query = "SELECT * FROM items";
            $q_result = mysqli_query($con, $query) or die(mysqli_error($con));
            while($i <= mysqli_num_rows($q_result)){
                $row = mysqli_fetch_array($q_result);
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/<?php echo $row['pid'] ?>.jpg" class="img-responsive">
                    <div class="caption">
                        <h3><?php echo $row['name'] ?></h3>
                        <p>Price: Rs. <?php echo $row['price'] ?>/-</p>
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else if(check_if_added_to_cart($row['pid'])){
                        ?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="cart-add.php?id=<?php echo $row['pid'] ?>" name="id" value="<?php echo $row['pid'] ?>" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            $i++;
            }
            ?>
        </div>
    </div>
    <?php
    include 'includes/footer.php'
    ?>
</body>

</html>