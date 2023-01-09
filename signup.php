<?php
session_start();
include 'func.php';
$fname = $_POST['inputfname'];
$email = $_POST['user_email'];
$pwd = $_POST['user_password'];
$rpwd = $_POST['rpassword'];



if(!empty($email) || !empty($pwd) || !empty($rpwd)){
    //deleteUser($email);
   // updateUser($fname,$email);
   if ($pwd === $rpwd){
   insertSignup($fname,$email,$pwd,'active');
   echo '<script>window.location="clownfish-app-krh8z.ondigitalocean.app/login.php";</script>' ;
   }else{
    echo 'Password Missmached';
   }
}







?>