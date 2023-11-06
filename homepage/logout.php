<?php
session_start();
unset( $_SESSION['sessionUser'] );
header('location: home.php');