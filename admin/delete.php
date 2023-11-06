<?php
include("../connection/connecter.php");
if (isset($_GET['id'])) {
    $userId = $_GET['id'] ;
    $query="DELETE FROM users WHERE id=$userId";
    mysqli_select_db($con,'tennis');
    mysqli_query($con,$query);
    mysqli_close($con);
    header('Location:user.php');
    exit();
} else {
    echo "User ID not provided in the URL.";
}
?>
