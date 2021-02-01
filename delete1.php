<?php
include 'connect.php';
$id=$_GET['id'];
$query="DELETE FROM studetails WHERE  id='$id'";
$re=mysqli_query($con,$query);
if($re)
{
    header('location:tabel1.php');
}
else
{
    echo "deleted not successfully1";

}



?>