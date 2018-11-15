<?php
include 'dblog.php';

$name=$_POST['uid'];
$address=$_POST['address'];
$phoneno=$_POST['phoneno'];
$pwd=$_POST['pwd'];

$sql="INSERT INTO customer(name,address,phone_no,password)
        VALUES('$name','$address','$phoneno','$pwd')";

$r=mysql_query($sql,$db) or die(mysql_error($db));

header("Location:log.php");

?> 