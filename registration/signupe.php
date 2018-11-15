<?php
include 'dblog.php';

$ssn=$_POST['ssn'];
$name=$_POST['name'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$shopname=$_POST['shopname'];

$sql="INSERT INTO employee(SSN,password,name,address,birthdate,sex,shopname)
        VALUES('$ssn','$pwd','$name','$address','$dob','$sex','$shopname')";

$r=mysql_query($sql,$db) or die(mysql_error($db));

header("Location:log.php");

?> 
