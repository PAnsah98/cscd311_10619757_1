
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    
    require 'stuLogin.php';
    $username="";
    $password="";
     if(isset($_POST["btnLogin"])){
              $password=strip_tags($_POST['password']);
              $username=strip_tags($_POST['username']);
              
              $query=mysqli_query($conn,"SELECT * FROM tbl_loginform WHERE user_name='$username' AND stud_password='$password'");
              
              $check_query=mysqli_num_rows($query);
              
              if($check_query===1){
                  header("LOCATION:newLoginfile.php");
              }
              else{
                  echo "<script>alert('Login unsuccessful')</script>";
              }
     }
?>
     
<!DOCTYPE html>   
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Login Form</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
    </head>
    <body style="background-image:url('student.jpg')">
        <br/>
        <form action="index.php" method="POST">
            <table class="table table-bordered" align="center" style="width:55%">
                <tr>
                    <th colspan="5"><h2>Student LOGIN</h2> </th>
                </tr>
                <tr>
                    <th> Username:</th>
                    <td><input type="text" name="username" id="textusername" placeholder="Enter Username" class="form-control"required></td>
                </tr>
                
                 <tr>
                    <th> Password:</th>
                    <td><input type="password" name="password" id="textpassword" placeholder="Enter Password" class="form-control"required></td>
                </tr>
                
                <tr>
                    <td colspan="3"><input type="submit" value="Login" name="btnLogin" class="btn btn-primary"></td>
                </tr> 
            </table>
        </form>
       
    </body>
</html>
