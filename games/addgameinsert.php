<?php
include 'dblog.php';

$pid=$_POST['pid'];
$gamename=$_POST['gamename'];
$publishers=$_POST['publishers'];
$platforms=$_POST['platforms'];
$awards=$_POST['awards'];
$year=$_POST['year'];
$rating=$_POST['rating'];


$sql="INSERT INTO videogame(PID,Platform,Publishers,rating,awards,year,gamename)
        VALUES('$pid','$platforms','$publishers','$rating','$awards','$year','$gamename')";

$r=mysql_query($sql,$db) or die(mysql_error($db));

header("Location:addgame.php");

?> 
