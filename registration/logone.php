<?php
include 'dblog.php';

$ssn=$_POST['ssn'];
$pwd=$_POST['pwd'];

$sql="SELECT * FROM employee WHERE SSN='$ssn' AND Password='$pwd'";

$r=mysql_query($sql,$db) or die(mysql_error($db));

if(!$row=mysql_fetch_assoc($r))
{
echo "Sorry,Invalid username or password!";

header("Location:loge.php");
}else{

echo"Hurray!!!You are logged in";

header("Location:eaddgm.php");
}



?> 