<?php
include 'connect.php';
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
     span{
       color:red;
     }
    </style >
    <script type="text/javascript">
    function valfun()
    {
      var fname= document.getElementById('fname').value;
      var lname= document.getElementById('lname').value;
      var roll= document.getElementById('roll').value;
      var course= document.getElementById('course').value;
      var email= document.getElementById('email').value;
      var password= document.getElementById('password').value;
      var phone= document.getElementById('phone').value;
      var f_correct=/^[A-Za-z]+$/;
      var l_correct=/^[A-Za-z]+$/;
      var r_correct=/^[0-9]+$/;
      
      var c_correct=/^[A-Za-z. ]+$/;
      //e_correct=[]
      pass_correct=/^[A-Za-z0-9@#&*]/;
      ph_correct=/^[0-9]+$/;

      var temp=0;

      //....................first name validation....................//
      if(fname.length<=2)
      {
        document.getElementById("falert").innerHTML="* first name must be 3-20 characters";
        return false;
      }
      else if(fname.length>=20)
      {
        document.getElementById("falert").innerHTML="* first name must be 3-20 characters";
        return false;

      }
      else if(!(f_correct.test(fname)))
      {
        document.getElementById("falert").innerHTML="* only characters are allowed ";
        return false;

      }
      else if(temp == 0){
        document.getElementById("falert").innerHTML="";
      }


        //....................last name validation....................//
        
        
      if(lname.length<=2)
      {
        document.getElementById("lalert").innerHTML="* first name must be 3-20 characters";
        return false;
      }
      else if(lname.length>=20)
      {
        document.getElementById("lalert").innerHTML="* first name must be 3-20 characters";
        return false;

      }
     else if(!l_correct.test(lname))
       {
         document.getElementById("lalert").innerHTML="* only characters are allowed ";
         return false;

       }
       else if(temp == 0){
        document.getElementById("lalert").innerHTML="";
      }
       

       //.............roll number validation ............//

       if(!(roll.length==8))
       {
        document.getElementById("ralert").innerHTML="* roll number must be 8 digits ";
         return false;
       }
       else if(!r_correct.test(roll))
       {
        document.getElementById("ralert").innerHTML="* must be in digits ";
         return false;

       }
       else if(temp == 0){
        document.getElementById("ralert").innerHTML="";
      }
       
       //...................course validation.........................//


       if(course.length>=10)
       {
        document.getElementById("calert").innerHTML="* course name must be within 10 characters ";
         return false;

       }
       else if(!c_correct.test(course))
       {
        document.getElementById("calert").innerHTML="* course name must be in character, . space only  ";
         return false
         }
       else if(temp == 0){
        document.getElementById("calert").innerHTML="";
      }

    
       //.................password validation.................//


       if(password.length<=6)
       {
        document.getElementById("palert").innerHTML="* password must be atleast 6 character ";
         return false;

       }else if(password.length>=20)
       {
        document.getElementById("palert").innerHTML="* password too long ";
         return false;

       }else if(!p_correct.test(password))
       {
        document.getElementById("palert").innerHTML="* password must be in A-Z a-z 0-9 @ # & * ";
         return false;
       }
       else if(temp == 0){
        document.getElementById("palert").innerHTML="";
      }

       //...................phone validation.....................//


       if(!(phone.length==10))
       {

       document.getElementById("phalert").innerHTML="* password must be in 10 digits only  ";
         return false;
       }else if(!ph_correct.test(phone))
       {
        document.getElementById("phalert").innerHTML="* password must be in digits only  ";
         return false;
       }
       else if(temp == 0){
        document.getElementById("phalert").innerHTML="";
      }



    }


    
    </script>
    
</head>
<body>

 <!-- Modal  add student -->
 <div class="modal fade"  action="tabel1.php" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 style="margin-right:50px; color: #0e84e6;">Registration Form</h4>
      <a class="btn btn-primary  float-right" href="tabel1.php">Back</a>
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 
 <div class="container">
  <div class="row">
  <div class="col-md-6 float-center" id="colon" >
  <form action="regis.php" method="POST">
  <div class="form-group">
  <label for="fname">First Name</label>
  <input type="text" name="fname"  class="form-control"  placeholder="Enter your first name " required>
  <input type="hidden" name="id" value="<?php echo $arr['id'];?>">
  </div>
  <div class="form-group">
  <label for="lname">Last Name</label>
  <input type="text" name="lname"  class="form-control"  placeholder="Enter your Last name " required>
  </div>
  <div class="form-group">
  <label for="roll">Roll No.</label>
  <input type="int" name="roll"  class="form-control"  placeholder="Enter your Roll Number " required>
  </div>
  <div class="form-group">
  <label for="course">Course</label>
  <input type="text" name="course"  class="form-control" placeholder="Enter your Course "required>
  </div>
  <div class="form-group">
  <label for="email">Email</label>
  <input type="email" name="email"  class="form-control" placeholder="Enter your first Email" required>
  </div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="password" name="password"  class="form-control"  placeholder="Enter your first Password" required>
  </div>
  <div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address"  class="form-control" placeholder="Enter your first Address" required>
  </div>
  <div class="form-group">
  <label for="phone">Phone</label>
  <input type="text" name="phone"  class="form-control"  placeholder="Enter your first Phone" required>
  </div>
 <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>

</div>
  </div>
  </div>
  </div>
  </div>
  </div>


 

<!-- Button trigger modal 
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentmodal">
  Click Here
</button> -->

<!-- Modal -->


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
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $roll=$_POST['roll'];
    $course=$_POST['course'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];

    $query= "INSERT INTO studetails  (fname,lname,roll,course,email,password,address,phone) VALUES ('$fname','$lname', $roll,'$course','$email','$password','$address','$phone')";

    $re=mysqli_query($con,$query);

    if($re)
    {
     
      echo "Inserted successfuly ";
      ?>
      
    
        <script type="text/javascript">
    window.location = "tabel1.php";
    </script> 

<?php
     // header('location: tabel1.php');
        
    }else{
     
   
      echo "Inserted not successfuly ";

    }

        

    }



    

?>


