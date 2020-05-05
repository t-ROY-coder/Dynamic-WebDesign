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
    <title>Sign Up | Lifestyle Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div class="container-fluid">
        <div class="col-sm-4 col-sm-offset-4">
            <div id="signup-content">
                <h2>SIGN UP</h2>
                <form class="form" method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" placeholder="Contact" pattern="[0-9]{10}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>