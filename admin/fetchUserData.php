<?php
include('../connection/connecter.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $query = "SELECT name, email, password, gender, age, role, phone, address FROM users WHERE id = $userId";
    mysqli_select_db($con, 'tennis');
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
}
?>