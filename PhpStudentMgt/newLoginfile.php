<!DOCTYPE html>
<html>
    <head>
    <h2> Control Panel</h2>
    </head>
<br/>
<br/>

<style>
 ul{
    list-style-type:none;
    margin:0;
    padding:0;
    overflow:hidden;
    background-color:#333333;
}

li a{
    display:block;
    color:white;
    text-align:left;
    padding:14px;
    text-decoration:none;
}
li a:hover{
     background-color:#111111
</style>
</head>

<body style="background-image:url('the.jpg')">
    <title>Navigation Menu</title>
   
<ul>
   <li><a href='Addstu.php'>ADD</a></li>
   <li><a href='editStu.php'>EDIT</a></li>
   <li><a href='deleteStu.php'>DELETE</a></li>
   <li><a href='viewStu.php'>VIEW</a></li>
</ul>
<hr/>
<hr size="10" hr width="5" hr width="20%">
<hr noshade>
</body>



<?php

echo "<a href='index.php'><h3><i>Back</i></h3></a>";

