<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cart | Lifestyle Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/cart.css">
</head>

<body>
    <?php
    include 'includes/header.php';
    $user_id = $_SESSION['user_id'];
    $query = "SELECT items.*, users_items.status
    FROM ((users_items
    INNER JOIN users ON users_items.user_id = users.id)
    INNER JOIN items ON users_items.item_id = items.pid) WHERE users_items.user_id = $user_id AND users_items.status = 'Added to Cart'";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    if (mysqli_num_rows($query_result) == 0){
    ?>
    <div class="container">
        <div class="text-center jumbotron">
            <h1><span class="glyphicon glyphicon-exclamation-sign"></span></h1>
            <h2>Your cart is EMPTY!</h2>
        </div>
    </div>
    <?php
    }
    else{
    ?>
    <div class="container-fluid">
        <div class="col-sm-6 col-sm-offset-3">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>S. #</th>
                        <th>Product #</th>
                        <th>Product Name</th>
                        <th>Price (Rs.)</th>
                        <th><a href='cart-empty.php' class='btn btn-warning'>Empty Cart</a></th>
                    </tr>
                    <?php
                    $i = 1;
                    $sum = 0;
                    $pid = array();
                    while($i <= mysqli_num_rows($query_result)){
                        $row = mysqli_fetch_array($query_result);
                        array_push($pid, $row['pid']);
                        $sum = $sum + $row['price'];
                        echo 
                        "<tr>
                            <td>$i</td>
                            <td>".$row['pid']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['price']."/-</td>
                            <td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link'>Remove</a></td>
                        </tr>";
                        $i++;
                    }
                    $pid = serialize($pid);
                    echo
                    "<tr>
                        <td></td>
                        <td></td>
                        <th>TOTAL :</th>
                        <th>".$sum."/-</th>
                        <th><a href='success.php?id={$pid}' class='btn btn-primary'>Confirm Order</a></th>
                    </tr>
                    <tr><td>...</td></tr>"
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    }
    include 'includes/footer.php';
    ?>
</body>

</html>