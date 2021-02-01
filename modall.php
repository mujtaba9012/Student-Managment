<?php
include 'connect.php';
error_reporting(0);
$query="SELECT * FROM `studetails` ";
$re=mysqli_query($con,$query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
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
    .lo{
       padding-left:40px;
     }
    </style>
    
</head>
<body>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Click Here
</button> -->

<!-- Modal -->
<div class="modal fade"  action="tabel1.php" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 style="margin-right:50px; color: #0e84e6;">Update Form</h4>
      <a class="btn btn-primary  float-right" href="tabel1.php">Back</a>
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php

while($arr=mysqli_fetch_array($re))
{
if($_GET['id']==$arr['id'])
{
?>

 <div class="container">
  <div class="row">
  <div class="col-md-6 float-center" id="colon" >
  <form action="modall.php" method="POST">
  <div class="form-group">
  <label for="fname">First Name</label>
  <input type="text" name="fname"  class="form-control" value="<?php echo $arr['fname'];?>" placeholder="Enter your first name " required>
  <input type="hidden" name="id" value="<?php echo $arr['id'];?>">
  </div>
  <div class="form-group">
  <label for="lname">Last Name</label>
  <input type="text" name="lname"  class="form-control" value="<?php echo $arr['lname'];?>" placeholder="Enter your Last name " required>
  </div>
  <div class="form-group">
  <label for="roll">Roll No.</label>
  <input type="int" name="roll"  class="form-control" value="<?php echo $arr['roll'];?>" placeholder="Enter your Roll Number " required>
  </div>
  <div class="form-group">
  <label for="course">Course</label>
  <input type="text" name="course"  class="form-control" value="<?php echo $arr['course'];?>"placeholder="Enter your Course "required>
  </div>
  <div class="form-group">
  <label for="email">Email</label>
  <input type="email" name="email"  class="form-control" value="<?php echo $arr['email'];?>"placeholder="Enter your first Email" required>
  </div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="password" name="password"  class="form-control" value="<?php echo $arr['password'];?>" placeholder="Enter your first Password" required>
  </div>
  <div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address"  class="form-control" value="<?php echo $arr['address'];?>"placeholder="Enter your first Address" required>
  </div>
  <div class="form-group">
  <label for="phone">Phone</label>
  <input type="text" name="phone"  class="form-control" value="<?php echo $arr['phone'];?>" placeholder="Enter your first Phone" required>
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
 </div>
      </div>
      </div>
      </div>
      <script type="text/javascript">
    $(window).on('load', function() {
        $('#exampleModal').modal('show');
    });
</script>
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