<!DOCTYPE html>
<html>
    <head>
        <title>Add Data </title>
    <body>

<?php

   $dbhost="localhost";
   $user_name="root";
   $password="";
   $db="school management";

$conn= mysqli_connect("localhost", "root", "", "db_login");

if(mysqli_connect_errno()){
   echo "failed to connect".mysqli_connect_errno();
}


include_once("stuLogin.php");

if(isset($_POST['Submit']))
{
    $stud_id = mysqli_real_escape_string($db,$_POST['stud_id']);
    $surname = mysqli_real_escape_string($db,$_POST['surname']);
    $othernames = mysqli_real_escape_string($db,$_POST['othernames']);
    $gender = mysqli_real_escape_string($db,$_POST['gender']);
    $DOB = mysqli_real_escape_string($db,$_POST['DOB']);
    $program = mysqli_real_escape_string($db,$_POST['program']);
    $course = mysqli_real_escape_string($db,$_POST['course']);
    $stud_stat = mysqli_real_escape_string($db,$_POST['stud_stat']);
    $year_enrol = mysqli_real_escape_string($db,$_POST['year_enrol']);
    $year_complete = mysqli_real_escape_string($db,$_POST['year_complete']);
    $hall_residence = mysqli_real_escape_string($db,$_POST['hall_residence']);
    $contact=mysqli_real_escape_string ($db,$_POST['contact']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $nationality = mysqli_real_escape_string($db,$_POST['nationality']);
    $guardian_name = mysqli_real_escape_string($db,$_POST['guardian_name']);
    $guardian_contact = mysqli_real_escape_string($db,$_POST['guardian_contact']);
    
    if(empty ($stud_id)|| ($surname)|| ($othernames)|| ($gender)|| ($DOB)|| ($program)|| ($course)|| ($stu_stat)|| ($year_enrol)|| ($year_complete)|| ($hall_residence)|| ($contact)|| ($email)|| ($nationality)|| ($guardian_name)||($guardian_contact))
    {
      if(empty($surname)) {
          echo "<font color='red'>Surname field is empty.</font><br/>";
      } 
      
      if(empty($othernames)) {
          echo "<font color='red'>Othernames field is empty.</font><br/>";
      } 
      
      if(empty($gender)) {
          echo "<font color='red'>Gender field is empty.</font><br/>";
      } 
      
      if(empty($DOB)) {
          echo "<font color='red'>DOB field is empty.</font><br/>";
      }
      
      if(empty($program)) {
          echo "<font color='red'>Program field is empty.</font><br/>";
      } 
      
      if(empty($course)) {
          echo "<font color='red'>Course field is empty.</font><br/>";
      } 
      
      if(empty($stud_stat)) {
          echo "<font color='red'>stud_stat field is empty.</font><br/>";
      } 
      
      if(empty($year_enrol)) {
          echo "<font color='red'>year_enrol field is empty.</font><br/>";
      } 
      
      if(empty($year_complete)) {
          echo "<font color='red'>year_complete field is empty.</font><br/>";
      } 
      
      if(empty($hall_residence)) {
          echo "<font color='red'>hall_residence field is empty.</font><br/>";
      } 
      
      if(empty($contact)) {
          echo "<font color='red'>Contact field is empty.</font><br/>";
      } 
      
      if(empty($email)) {
          echo "<font color='red'>email field is empty.</font><br/>";
      } 
      
      if(empty($nationality)) {
          echo "<font color='red'>Nationality field is empty.</font><br/>";
      } 
      
      if(empty($guardian_name)) {
          echo "<font color='red'>guardian_name field is empty.</font><br/>";
      } 
      
      if(empty($guardian_contact)) {
          echo "<font color='red'>guardian_contact field is empty.</font><br/>";
      } 
      echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
     
    }
    else{
        $result=mysqli_query($mysqli, "INSERT INTO tbl_student(surname,othernames,gender,gender,program,course,stu_stat,year_enrol,year_complete,hall_residence,contact,email,nationality,guardian_name,guardian_contact) VALUES($surname,$othernames,$gender,$DOB,$program,$course,$stu_stat,$year_enrol,$year_complete,$hall_residence,$contact,$email,$nationality,$guardian_name,$guardian_contact)");

        echo "<font color='green'>Data added successfully.>";
        echo "<br/><a href='index.php.>View Result</a>";
        
    }
}
?>
         <a href="index.php">Home</a>
        <br><br>
        
        <form action="Addstu.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Surname</td>
                    <td><input type="text" name="surname" ></td>
                </tr>
                
                <tr>
                    <td>Other names</td>
                    <td><input type="text" name= "othernames" ></td>
                </tr>
                
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="gender"></td>
                </tr>
                
                <tr>
                    <td>DOB</td>
                    <td><input type="date" name="DOB" ></td>
                </tr>
                
                <tr>
                    <td>Program</td>
                    <td><input type="text" name="program" ></td>
                </tr>
                
                <tr>
                    <td>course</td>
                    <td><input type="text" name="course" > </td>
                </tr>
                
                <tr>
                    <td>Student Status</td>
                    <td><input type="text" name="stud_stat"> </td>
                </tr>
                
                <tr>
                    <td>Year of Enrollment</td>
                    <td><input type="text" name="year_enrol" > </td>
                </tr>
                
                <tr>
                    <td>Year of Completion</td>
                    <td><input type="text" name="year_complete" ></td>
                </tr>
                
                 <tr>
                    <td>Hall of Residence</td>
                    <td><input type="text" name="hall_residence" > </td>
                </tr>
                
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact"></td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"> </td>
                </tr>
                
                <tr>
                    <td>Nationality</td>
                    <td><input type="text" name="nationality"> </td>
                </tr>
                
                <tr>
                    <td>Guardian Name</td>
                    <td><input type="text" name="guardian_name"></td>
                </tr>
                
                <tr>
                    <td>Guardian Contact</td>
                    <td><input type="text" name="guardian_contact" ></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="Submit" value="Add"></td>
              
                </tr>
                    
            </table>  
        </form>
         </body>
  
</html>
   