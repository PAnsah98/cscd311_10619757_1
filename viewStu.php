<?php

  $dbhost="localhost";
   $user_name="root";
   $password="";
   $db="school management";

$conn= mysqli_connect("localhost", "root", "", "db_login");

 
if(mysqli_connect_errno()){
   echo "failed to connect".mysqli_connect_errno();
}
?>
<?php>
$result=mysqli_query($mysqli,"SELECT * FROM tbl_student WHERE stud_id=$_SESSION['id'].ORDER BY id DESC");
?>

<html>
    <head>
        <title>HomePage</title>
    </head> 
    
    <body>
        <a href="add.html"> Add New Data</a> | <a href="index.php"></a>
        <br/><br/>
        
        <table width='80%' border=0>
            <tr bgcolor='#CCCCC'>
                <td>stud_id</td>
                <td>Surname</td>
                <td>Other Names</td>
                <td>Gender</td>
                <td>DOB</td>
                <td>Program</td>
                <td>Course</td>
                <td>Student Status</td>
                <td>Year of Enrolment</td>
                <td>Year of Completion</td>
                <td>Hall Of Residence</td>
                <td>Contact</td>
                <td>Email</td>
                <td>Nationality</td>
                <td>Gardian Name</td>
                <td>Guardian Contact</td>
            </tr>
            <?php
            while($res=mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$res['stud_id']."</td>";
                echo "<td>".$res['surname']."</td>";
                echo "<td>".$res['othernames']."</td>";
                echo "<td>".$res['gender']."</td>";
                echo "<td>".$res['DOB']."</td>";
                echo "<td>".$res['program']."</td>";
                echo "<td>".$res['course']."</td>";
                echo "<td>".$res['stud_stat']."</td>";
                echo "<td>".$res['year_enrol']."</td>";
                echo "<td>".$res['year_complete']."</td>";
                echo "<td>".$res['hall_residence']."</td>";
                echo "<td>".$res['contact']."</td>";
                echo "<td>".$res['email']."</td>";
                echo "<td>".$res['nationality']."</td>";
                echo "<td>".$res['guardian_name']."</td>";
                echo "<td>".$res['guardian_contact']."</td>"; 
                
                echo "<td><a href=\"edit.php?id=$res[id]\" onClick=\"return confirm('Are you Sure you want to delete?')\">Delete</a></td>";
            }
            ?>
        </table>      
    </body>
    
</html>


