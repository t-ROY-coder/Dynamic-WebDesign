<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: ../index.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$old_pass = md5(mysqli_real_escape_string($con, $_POST['oldpass']));
$new_pass = md5(mysqli_real_escape_string($con, $_POST['newpass']));
$new_pass2 = md5(mysqli_real_escape_string($con, $_POST['newpass2']));

if(strcmp($new_pass, $new_pass2) != 0){
    header('location: settings.php?password_error=EnterSameNewPasswords');
    exit;
}

$query = "SELECT password FROM users WHERE id = $user_id";
$q_result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($q_result);

if(strcmp($row['password'], $old_pass) != 0){
    header('location: settings.php?password_error=InvalidOldPassword');
    exit;
}
else{
    $update_q = "UPDATE users SET password = '$new_pass' WHERE id = $user_id";
    mysqli_query($con, $update_q) or die(mysqli_error($con));
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
            <h1><span class="glyphicon glyphicon-ok"></span></h1>
            <h2>Password successfully Changed</h2>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>