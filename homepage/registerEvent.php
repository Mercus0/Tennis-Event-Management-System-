<?php 
    session_start();
    include("../connection/connecter.php");
    $eventId=$_POST['eventId'];
    $userId=$_SESSION["sessionUser"];
    $checkquery="SELECT * FROM regristration WHERE user_id = $userId AND event_id = $eventId";
    $result = mysqli_query($con,$checkquery);
    if(mysqli_num_rows($result)> 0){
        header("location:home.php?error=1");
        exit;
    }else{
        $query="INSERT INTO regristration (user_id,event_id) VALUES ('$userId','$eventId')";
    if(!mysqli_query($con,$query)){
        echo ('Error: '.mysqli_error($con));
    }
    mysqli_close($con);
    header('location:home.php');
    exit;
    }
    
?>