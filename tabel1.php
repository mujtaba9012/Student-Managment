<?php
include 'connect.php';
$query="SELECT * FROM studetails ";
$re=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css"/>
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css"/>
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
   <style>
     .col-12{
       background:pink;
       height:70px;
     }
     .add{
       margin-left:960px;
     }
   </style>
</head>
<body style="background:#b8b182;">
<div class="container">
<div class="row">
  <div class="col-12">
 
  <center><h2 style="color: #0e84e6;"><b>DETAILS OF ALL STUDENTS </b></h2><center>
    </div>
    <a class="btn btn-primary  float-right" href="sms.php">BACK</a>
    <a class=" add btn btn-primary float-right" href="regis.php">Add New Student</a>

  <h2>TABLE</h2>
  <table id="mytable"class ="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Roll No.</th>
        <th>Course</th>
        <th>Email</th>
        <th>Password</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Operation</th>

      </tr>
    </thead>
    <tbody>
    <?php
    while($arr=mysqli_fetch_array($re))
    {
    ?>  
      <tr>
    <td><?php echo $arr['fname'];?></td>
    <td><?php echo $arr['lname'];?></td>
    <td><?php echo $arr['roll'];?></td>
    <td><?php echo $arr['course'];?></td>
    <td><?php echo $arr['email'];?></td>
    <td><?php echo $arr['password'];?></td>
    <td><?php echo $arr['address'];?></td>
    <td><?php echo $arr['phone'];?></td>
    
  
   <td><a class="btn btn-info" href="modall.php?id=<?php echo $arr['id'];?>">Edit</a>
      <a class="btn btn-danger" href="delete1.php?id=<?php echo $arr['id']; ?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
      
       
    </tbody>
  </table>
  </div>
</div>
  </div>

<script>
    $(document).ready(function(){
        $('#mytable').DataTable();
    });

    </script>

</body>
</html>
