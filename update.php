<?php
include 'connect.php';
error_reporting(0);
$query="SELECT * FROM `studetails` ";
$re=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>

     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
    body{
        background:#db74cf;
    }
    #colon{

        background:#35ab58;
        min-height:700px;

    }
    .registration{
        font-weight:700;
        pt-5;
        text-transform:uppercase;
        border-bottom:solid;
    }

    </style>
</head>

<body>

<?php

while($arr=mysqli_fetch_array($re))
{
if($_GET['id']==$arr['id'])
{
?>
<a style="padding-left:1400px; width:100%;" href="sms.php">BACK</a>
 <div class="container">
  <div class="row">
  <div class="col-md-6 float-center" id="colon" >
  <center><b class="registration">Update Form</b></center>
  <form action="update.php" method="POST">
  <div class="form-group">
  <label for="fname">First Name</label>
  <input type="text" name="fname"  class="form-control" value="<?php echo $arr['fname'];?>" placeholder="Enter your first name ">
  <input type="hidden" name="id" value="<?php echo $arr['id'];?>">
  </div>
  <div class="form-group">
  <label for="lname">Last Name</label>
  <input type="text" name="lname"  class="form-control" value="<?php echo $arr['lname'];?>" placeholder="Enter your Last name ">
  </div>
  <div class="form-group">
  <label for="roll">Roll No.</label>
  <input type="int" name="roll"  class="form-control" value="<?php echo $arr['roll'];?>" placeholder="Enter your Roll Number ">
  </div>
  <div class="form-group">
  <label for="course">Course</label>
  <input type="text" name="course"  class="form-control" value="<?php echo $arr['course'];?>"placeholder="Enter your Course ">
  </div>
  <div class="form-group">
  <label for="email">Email</label>
  <input type="text" name="email"  class="form-control" value="<?php echo $arr['email'];?>"placeholder="Enter your first Email">
  </div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="text" name="password"  class="form-control" value="<?php echo $arr['password'];?>" placeholder="Enter your first Password">
  </div>
  <div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address"  class="form-control" value="<?php echo $arr['address'];?>"placeholder="Enter your first Address">
  </div>
  <div class="form-group">
  <label for="phone">Phone</label>
  <input type="text" name="phone"  class="form-control" value="<?php echo $arr['phone'];?>" placeholder="Enter your first Phone">
  </div>
 <input type="submit" class="btn btn-primary" name="submit" value="Update">
</form>

 </div>
  </div>
  </div>

<?php
}
}
?>

</body>

</html>

<?php
if(isset($_POST['submit']))
{
    $fna=$_POST['fname'];
    $lna=$_POST['lname'];
    $rollno=$_POST['roll'];
    $course1=$_POST['course'];
    $email1=$_POST['email'];
    $password1=$_POST['password'];
    $address1=$_POST['address'];
    $phone1=$_POST['phone'];
    $id=$_POST['id'];

   $query= "UPDATE `studetails` SET fname='$fna' ,lname='$lna' ,roll='$rollno', course='$course1',email='$email1',password='$password1',
                address='$address1',phone='$phone1' WHERE id= '$id' ";
   $re=mysqli_query($con,$query);

   if($re)
   {
    
    
      header('location:tabel1.php');
   }
   else
   {
       echo "not updated successfully";
   }

}
?>