<?php

include_once("stuLogin.php");

if(isset($_POST['update']))
{
    $stud_id = $_POST['stud_id'];
    $surname = $_POST['surname'];
    $othernames = $_POST['othernames'];
    $gender = $_POST['gender'];
    $DOB = $_POST['DOB'];
    $program = $_POST['program'];
    $course = $_POST['course'];
    $stud_stat = $_POST['stud_stat'];
    $year_enrol = $_POST['year_enrol'];
    $year_complete = $_POST['year_complete'];
    $hall_residence = $_POST['hall_residence'];
    $contact= $_POST['contact'];
    $email = $_POST['email'];
    $nationality = $_POST['nationality'];
    $guardian_name = $_POST['guardian_name'];
    $guardian_contact = $_POST['guardian_contact'];
    
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
      
     
    }
    else{
        $result=mysqli_query($mysqli,"UPDATE tbl_student SET surname='surname', othernames='othernames', gender='gender',DOB='DOB',program='program',course='course',stud_stat='stud_stat',year_enrol='year_enrol',year_complete='year_complete',contact='contact',email='email',nationality='nationality',guardian_name='guardian_name',guardian_contact='guardian_contact' WHERE stud_id=$stud_id");
   
       header("Location: index.php");
}
        
}

?>
<?php

$stud_id=$_GET['stud_id'];

$result=mysqli_query($mysqli, "SELECT * FROM tbl_student WHERE stud_id=stud_id");

while($res=mysqli_fetch_array($result)){
     $stud_id = $res['stud_id'];
    $surname = $res['surname'];
    $othernames = $res['othernames'];
    $gender = $res['gender'];
    $DOB = $res['DOB'];
    $program = $res['program'];
    $course = $res['course'];
    $stud_stat = $res['stud_stat'];
    $year_enrol = $res['year_enrol'];
    $year_complete = $res['year_complete'];
    $hall_residence = $res['hall_residence'];
    $contact= $res['contact'];
    $email = $res['email'];
    $nationality = $res['nationality'];
    $guardian_name = $res['guardian_name'];
    $guardian_contact = $res['guardian_contact'];
    
}
?>
<html>
    <head>
        <title> Edit Data</title>
    </head>
    
    <body>
        <a href="index.php">Home</a>
        <br/><br/>
        
        <form surname="form1" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Surname</td>
                    <td><input type="text" name="surname" value="<?php echo $surname;?>" </td>
                </tr>
                
                <tr>
                    <td>Other names</td>
                    <td><input type="text" name= "othernames" value="<?php echo $othernames;?>" </td>
                </tr>
                
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="gender" value="<?php echo $gender;?>" </td>
                </tr>
                
                <tr>
                    <td>DOB</td>
                    <td><input type="date" name="DOB" value="<?php echo $DOB;?>" </td>
                </tr>
                
                <tr>
                    <td>Program</td>
                    <td><input type="text" name="program" value="<?php echo $program;?>" </td>
                </tr>
                
                <tr>
                    <td>course</td>
                    <td><input type="text" name="course" value="<?php echo $course;?>" </td>
                </tr>
                
                <tr>
                    <td>Student Status</td>
                    <td><input type="text" name="stud_stat" value="<?php echo $stud_stat;?>" </td>
                </tr>
                
                <tr>
                    <td>Year of Enrollment</td>
                    <td><input type="text" name="year_enrol" value="<?php echo $year_enrol;?>" </td>
                </tr>
                
                <tr>
                    <td>Year of Completion</td>
                    <td><input type="text" name="year_complete" value="<?php echo $year_complete;?>" </td>
                </tr>
                
                 <tr>
                    <td>Hall of Residence</td>
                    <td><input type="text" name="hall_residence" value="<?php echo $hall_residence;?>" </td>
                </tr>
                
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact" value="<?php echo $contact;?>" </td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $email;?>" </td>
                </tr>
                
                <tr>
                    <td>Nationality</td>
                    <td><input type="text" name="nationality" value="<?php echo $nationality;?>" </td>
                </tr>
                
                <tr>
                    <td>Guardian Name</td>
                    <td><input type="text" name="guardian_name" value="<?php echo $guardian_name;?>" </td>
                </tr>
                
                <tr>
                    <td>Guardian Contact</td>
                    <td><input type="text" name="guardian_contact" value="<?php echo $guardian_contact;?>" </td>
                </tr>
                
                <tr>
                    <td><input type="hidden" name="stud_id" value="<?php echo $_GET['id'];?>" </td>
               
                <td>
                    <input type="submit" name="update">
                </td>
                </tr
                
               
            </table>
        </form>
    </body>
        
</html>