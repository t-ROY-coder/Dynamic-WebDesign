<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));
$query = "SELECT id, email FROM users WHERE email = '$email' AND password = '$password'";
if (mysqli_num_rows(mysqli_query($con, $query)) == 0)
{
    header('location: signup.php?USER_ERROR=NotValidUser');
}
else
{
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = mysqli_fetch_array(mysqli_query($con, $query))['id'];
    header('location: product.php');
}
?>
