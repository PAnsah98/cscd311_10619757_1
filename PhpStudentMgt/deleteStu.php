<?php

include("stuLogin.php");

$stud_id=$_GET['stud_id'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE stud_id=$");

$surname=$_GET['surname'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE surname=$");

$othernames=$_GET['othernames'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE othernames=$");

$gender=$_GET['gender'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE gender=$");

$DOB=$_GET['DOB'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE DOB=$");

$program=$_GET['program'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE program=$");

$course=$_GET['course'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE course=$");

$stud_stat=$_GET['stud_stat'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE stud_stat=$");

$year_enrol=$_GET['year_enrol'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE year_enrol=$");

$year_complete=$_GET['year_complete'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE year_complete=$");

$hall_residence=$_GET['hall-residence'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE hall_residence=$");

$contact=$_GET['contact'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE contact=$");

$email=$_GET['email'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE email=$");

$nationality=$_GET['nationality'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE nationality=$");

$guardian_name=$_GET['guardian_name'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE guardian_name=$");

$guardian_contact=$_GET['guardian_contact'];
$result=mysqli_query($mysqli, "DELETE FROM tbl_student WHERE guardian_contact=$");

header("Location:view.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

