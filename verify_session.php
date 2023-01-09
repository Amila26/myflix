<?php

// session_start();

// if ($_SESSION["user_email"]=="amilaindika26@gmail.com" &&  $_SESSION["user_password"]=="1234" ){
//     $userNAme = $_SESSION["user_email"];
//     $user_password = $_SESSION["user_password"];
// }else{
//     echo '<script>window.location="http://localhost/Myflix/login.php";</script>';
// }



session_start();
$email =  $_SESSION['username'];
$pw = $_SESSION['pwd'];

if(!empty($email) && !empty($pw))
{
$userNAme = $_SESSION['username'];
    $user_password = $_SESSION['pwd'];
}else{
   echo '<script>window.location="http://localhost/Myflix/login.php";</script>';
};

?>