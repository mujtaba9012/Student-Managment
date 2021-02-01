<?php
include 'connect.php';
$query="SELECT * FROM studetails ";
$re=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>show</title>
</head>
<body style="background: green;">
<a style="padding-left:1400px; color:red; "href="sms.php">BACK</a>

    <h2 align="center">DETAILS OF ALL STUDENTS </h2>
    <table border="2" style="width:100%">
        <tr>
        <th>First Name</th>
        <th>last Name</th>
        <th>Roll No.</th>
        <th>Course</th>
        <th>Email</th>
        <th>Password</th>
        <th>Address</th>
        <th>Phone</th>
        <th colspan="2">Actions</th>
        
        
        </tr>
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
            <td><a  class="btn btn-primary " href="update.php?id=<?php echo $arr['id'];?>">Edit</a>
            <a href="delete1.php?id=<?php echo $arr['id']; ?>">Delete</a></td>
            
        </tr>
         <?php   
        }
        ?>


    </table>
    
</body>
</html>