<?php
session_start();
echo "test amila";

$a = 10;
$b =2;
$c = 2;
$sum = $a + $b;
echo "<br> <h1>Amila's Account</h1>";
echo $sum;

echo "<br><br>";

for ($i=0;$i<=10;$i++){
    echo $i."<br>";
}

if($a === 1){
    echo "This is Number one";
}elseif($b > 2){
    echo "B";
}else{
    echo "Not B or A";
}

$string = "amila_kumara.sakura_eshan";


$exp = explode("_",$string);
echo "<pre>";
print_r($exp);
echo "</pre>";

function addtwonumbers($no1,$no2){
    $sum = $no1 + $no2;
    return $sum; 
}
echo "<br><bR>";
echo addtwonumbers($a,$b);

echo "<br><br>";
$user = "Amila's Account";

$_SESSION['userName'] = $user;
$_SESSION['userid'] = "1234";
echo "$user";