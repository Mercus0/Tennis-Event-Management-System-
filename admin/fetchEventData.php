<?php
include('../connection/connecter.php');

if (isset($_GET['id'])) {
    $eventId = $_GET['id'];

    $query = "SELECT id,name,description,s_date,location,e_date FROM events WHERE id = $eventId";
    mysqli_select_db($con, 'tennis');
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
}
?>