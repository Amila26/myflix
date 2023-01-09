<?php
session_start();
include 'func.php';
$email = $_POST['user_email'];
$pwd = $_POST['user_password'];
echo $email;
$var = searchUser($email,$pwd);

$usr_email = $var[0]['usr_email'];
$usr_pwd = $var[0]['usr_pwd'];
//echo $usr_email ." ".$usr_pwd;
if(!empty($usr_email) && !empty($usr_pwd)){
    
    $_SESSION['username'] = $usr_email;
    $_SESSION['pwd'] = $usr_pwd ;
echo 'Login Success!';
    echo '<script>window.location="https://clownfish-app-krh8z.ondigitalocean.app/Vedio.php";</script>';
}else{
    echo 'Wrong User Name Or Password';
}