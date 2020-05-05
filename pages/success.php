<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: ../index.php');
    exit;
}
$pid = unserialize($_GET['id']);
foreach($pid as $p){
    $query = "UPDATE users_items SET status = 'Confirmed' WHERE users_items.item_id = $p";
    mysqli_query($con, $query) or die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Order Confirmed | Lifestyle Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/success.css">
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div class="container">
        <div class="jumbotron text-center">
            <h1><span class="glyphicon glyphicon-thumbs-up"></span></h1>
            <h1>Your order is Confirmed</h1>
            <h2>Thank You for shopping with us</h2>
            <h3><a href="product.php">Click here</a> to purchase any other item</h3>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>