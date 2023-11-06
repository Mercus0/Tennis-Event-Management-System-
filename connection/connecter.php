<?php
    $severName="localhost";
    $userName="root";
    $password="";
    $db="tennis";

    $con=mysqli_connect($severName,$userName,$password,$db);

    // check connection
    if(!$con){
        die("Error Connection");
    }