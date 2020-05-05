<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Settings | Lifestyle Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/settings.css">
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div class="container-fluid">
        <div class="col-sm-4 col-sm-offset-4">
            <div id="password-change">
                <h3>Change Password</h3>
                <form class="form" method="post" action="settings_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" name="oldpass" placeholder="Old Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="newpass" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="newpass2" placeholder="Re-type New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                    </div>
                    <input type="submit" value="Change" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>