<?php
include("../connection/connecter.php");
if (isset($_GET['id'])) {
    $eventId = $_GET['id'] ;
    $query="DELETE FROM regristration WHERE id=$eventId";
    mysqli_select_db($con,'tennis');
    mysqli_query($con,$query);
    mysqli_close($con);
    header('Location:reports.php');
    exit();
} else {
    echo "User ID not provided in the URL.";
}
?>