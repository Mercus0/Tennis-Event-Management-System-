<?php
    include('../connection/connecter.php');
    $query="INSERT INTO events (name,description,s_date,e_date,location)values('$_POST[name]','$_POST[description]','$_POST[s_date]','$_POST[e_date]','$_POST[location]')";
    if(!mysqli_query($con,$query)){
        echo ('Error: '.mysqli_error($con));
    }
    mysqli_close($con);
    header('location:event.php');
?>