<?php 
session_start();
include('../connection/connecter.php');
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query=mysqli_query($con,"SELECT * FROM users WHERE email='".$email."' AND password='".$password."'");
        $numOfRows=mysqli_num_rows($query);
        if($numOfRows!=0){  
            while($row=mysqli_fetch_assoc($query)){
                $dbusername=$row['email'];
                $dbpassword=$row['password'];
                $role=$row['role'];
                $userId=$row['id'];
            }if($email==$dbusername && $password==$dbpassword){
                $_SESSION['sessionUser']=$userId;
                if($role==1){
                    header('location:../admin/user.php');
                }
                else if($role==0){
                    header('location:../homepage/home.php');
                }
            }
        }else {
            header('location:../login/loginpage.php?incorrect=1');
        }
    }else{
        header('location:../login/loginpage.php?incorrect=1');
    }
?>