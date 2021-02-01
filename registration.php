<?php
 include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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
<a style="padding-left:1400px; width:100%; " href="sms.php">BACK</a>
<div class="container">
  <div class="row">
  <div class="col-md-6 float-center" id="colon" >
  <center><b class="registration">Registration Form</b></center>
  <form action="registration.php" method="POST">
  <div class="form-group">
  <label for="fname">First Name</label>
  <input type="text" name="fname"  class="form-control"placeholder="Enter your first name ">
  </div>
  <div class="form-group">
  <label for="lname">Last Name</label>
  <input type="text" name="lname"  class="form-control"placeholder="Enter your Last name ">
  </div>
  <div class="form-group">
  <label for="roll">Roll No.</label>
  <input type="text" name="roll"  class="form-control"placeholder="Enter your Roll Number ">
  </div>
  <div class="form-group">
  <label for="course">Course</label>
  <input type="text" name="course"  class="form-control"placeholder="Enter your Course ">
  </div>
  <div class="form-group">
  <label for="email">Email</label>
  <input type="text" name="email"  class="form-control" placeholder="Enter your first Email">
  </div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="text" name="password"  class="form-control" placeholder="Enter your first Password">
  </div>
  <div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address"  class="form-control" placeholder="Enter your first Address">
  </div>
  <div class="form-group">
  <label for="phone">Phone</label>
  <input type="text" name="phone"  class="form-control" placeholder="Enter your first Phone">
  </div>
  
  <input type="submit" class="btn btn-primary" name="submit" value="Submit ">
  </form>




  </div>
  </div>
  </div>

</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $roll=$_POST['roll'];
    $course=$_POST['course'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];

    $query="INSERT INTO studetails  (fname,lname,roll,course,email,password,address,phone) VALUES ('$fname','$lname', $roll,'$course','$email','$password','$address','$phone')";
    $re=mysqli_query($con,$query);
    if($re)
    {
        header('location:tabel1.php');
    }else{

        echo "inserted  not successfully";

    }



    }

?>

