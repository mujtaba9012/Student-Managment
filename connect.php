<?php

$ser="localhost";
$user="root";
$pa="";
$db="details";
$con=mysqli_connect($ser,$user,$pa,$db);

if($con)
echo "";
else
echo "not connected";
?>