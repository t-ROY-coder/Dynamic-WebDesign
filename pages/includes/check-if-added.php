<?php
function check_if_added_to_cart($item_id){
    require 'includes/common.php';
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to Cart'";
    if(mysqli_num_rows(mysqli_query($con, $query)))
        return 1;
    else
        return 0;
}
?>