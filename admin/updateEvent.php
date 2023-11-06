<?php
include("../connection/connecter.php");
$name = $_POST['name'];
$description= $_POST['description'];
$s_date = $_POST['s_date'];
$e_date= $_POST['e_date'];
$location = $_POST['location'];
$id = $_POST['eventId'];
$query = "UPDATE events SET name = '$name', description = '$description', s_date = '$s_date', location = '$location', e_date = '$e_date' WHERE id = '".$id."'";
mysqli_query($con, $query);
mysqli_close($con);
header('Location: event.php');
?>