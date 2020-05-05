<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location: product.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login | Lifestyle Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/login.css" type="text/css">

</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div class="container-fluid">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>LOGIN</h4>
                </div>
                <div class="panel-body">
                    <p class="text-warning"><i>Login to make a purchase</i></p>
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                    </form><br/>
                </div>
                <div class="panel-footer">
                    <p>Don't have an account? <a href="signup.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>