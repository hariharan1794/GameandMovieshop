<?php
include 'dblog.php';

$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql="SELECT * FROM customer WHERE Name='$uid' AND Password='$pwd'";

$r=mysql_query($sql,$db) or die(mysql_error($db));

if(!$row=mysql_fetch_assoc($r))
{
echo "Invalid username or password!";
header("Locatio:log.php");
}else{

echo"You are logged in";
header("Location:customersearch.php");
}

//header("Location:log.php");

?> 