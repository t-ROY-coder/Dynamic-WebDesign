<?php
require 'includes/common.php';
$user_id = $_SESSION['user_id'];
$item_id = $_GET['id'];
$query = "INSERT INTO users_items (user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to Cart')";
mysqli_query($con, $query) or die(mysqli_error($con));
header('location: product.php');
?>