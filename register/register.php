<?php
include('../connection/connecter.php');


$nameErr = $emailErr = $passwordErr = $ageErr = $phoneErr = $addErr=false;

if (empty($_POST["name"])) {
    $nameErr = true;
}

if (empty($_POST['email'])) {
    $emailErr = true;
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = true;
}

if (empty($_POST['password']) || empty($_POST['confirmPassword']) || $_POST['password'] !== $_POST['confirmPassword']) {
    $passwordErr = true;
}

if (empty($_POST['age']) || $_POST['age'] < 14 || $_POST['age'] > 60) {
    $ageErr = true;
}

if (empty($_POST['phone']) || !preg_match("/^[0-9]*$/", $_POST['phone'])) {
    $phoneErr = true;
}
if (empty($_POST["address"])) {
    $addErr = true;
}

if ($nameErr || $emailErr || $passwordErr || $ageErr || $phoneErr || $addErr) {
    if ($nameErr) {
        header('location:registerPage.php?nameErr=1');
    }
    if ($emailErr) {
        header('location:registerPage.php?emailErr=1');
    }
    if ($passwordErr) {
        header('location:registerPage.php?passwordErr=1');
    }
    if ($ageErr) {
        header('location:registerPage.php?ageErr=1');
    }
    if ($phoneErr) {
        header('location:registerPage.php?phoneErr=1');
    }if ($addErr) {
        header('location:registerPage.php?addErr=1');
    }

}else{
    $query = "INSERT INTO users(name,email,password,gender,age,phone,address) 
    values('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[gender]','$_POST[age]','$_POST[phone]','$_POST[address]')";
    if (!mysqli_query($con, $query)) {
        echo ('Error: ' . mysqli_error($con));
    }
    mysqli_close($con);
}
?>