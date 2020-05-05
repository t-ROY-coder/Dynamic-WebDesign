<?php
require 'includes/common.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

/*$regex_name = "^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$";
$regex_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$";
$regex_password = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}";
$regex_contact = "[0-9]{10}";

if(!preg_match($regex_name, $name)){
    header('location: ../index.php?name_error = Enter valid Name');
    exit;
}
if(!preg_match($regex_email, $email)){
    header('location: ../index.php?email_error = Enter valid E-mail');
    exit;
}
if(!preg_match($regex_password, $password)){
    header('location: ../index.php?password_error = Password should have atleast one number and one uppercase and lowercase letter, and at least 6 or more characters');
    exit;
}
if(!preg_match($regex_contact, $contact)){
    header('location: ../index.php?contact_error = Enter valid Contact number');
    exit;
}
*/
$name = mysqli_real_escape_string($con, $name);
$email = mysqli_real_escape_string($con, $email);
$password = md5(mysqli_real_escape_string($con, $password));
$contact = mysqli_real_escape_string($con, $contact);
$city = mysqli_real_escape_string($con, $city);
$address = mysqli_real_escape_string($con, $address);

$query = "SELECT id FROM users WHERE email = '$email'";
if(mysqli_num_rows(mysqli_query($con, $query))){
    header('location: ../index.php?Email_error=E-mailAlreadyExists');
    exit;
}
else{
    $in_query = "INSERT INTO users(name, email, password, contact, city, address) VALUES('$name', '$email', '$password', '$contact', '$city', '$address')";
    mysqli_query($con, $in_query);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = mysqli_insert_id($con);
    header('location: product.php');
}
?>