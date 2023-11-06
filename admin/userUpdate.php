<?php
include("../connection/connecter.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$id = $_POST['userId'];
$query = "UPDATE users SET name = '$name', email = '$email', password = '$password', role = '$role', gender = '$gender', age = '$age', phone = '$phone', address = '$address' WHERE id = '".$id."'";
mysqli_query($con, $query);
mysqli_close($con);
header('Location:user.php');
?>