<?php
include 'connect.php';
session_start();
error_reporting(0);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    body{
      background:#3dc230;
    }
    .login{
      margin-top:340px;
      margin-left:450px;
      
      

       
    }
    .col-12{
      background:pink;
      height:50px;
    }
    ::placeholder
    {
      color:red;
      font-weight:700;
    }
    </style>
  </head>
  

  <body>
<!-- Button trigger modal -->
<div class="container">
<div class="row">
<div class="col-12">
<center><b>WELCOME AT ADMIN PAGE</b></center>

</div>
<button type="button" class="  btn  btn-primary login" data-toggle="modal" data-target="#exampleModal">
  <div class="login1">Login here </div>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h3 style="color:#e82ca0;">Admin Login Form</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center class="center">
<form action="index.php" method="POST" autocomplete="off">
<input type="text" class="form-control" name="username" placeholder="Enter User Name" required><br><br>
<input type="text"class="form-control" name="password"placeholder="Enter Password" required><br><br>
<input type="submit"class="btn btn-primary" name="login" value="LogIn">
</form>
</div>
</div>

</body>
</html>
<?php

if(isset($_POST['login']))
{
    $uusername=$_POST['username'];
    $ppassword=$_POST['password'];

    $query="SELECT * FROM  `login`  WHERE username='{$uusername}' AND password='{$ppassword}' ";

    $re=mysqli_query($con,$query);

    if(mysqli_num_rows($re)==1)
    {
      header('location:sms.php');
    }
    else{
        echo "\n\nyour username and password are wrong please try again!!";

    }
}



?>







      </div>
  </div>
  </div>

      
      </div>
      
    </div>
  </div>
</div>
