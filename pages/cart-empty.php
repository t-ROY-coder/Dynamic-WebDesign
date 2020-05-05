<?php
require 'includes/common.php';
$user_id = $_SESSION['user_id'];
$query = "DELETE FROM users_items WHERE user_id = $user_id AND status = 'Added to Cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
header('location: cart.php');
?>