<?php
include 'dblog.php';

$pid=$_POST['pid'];
$moviename=$_POST['moviename'];
$director=$_POST['director'];
$awards=$_POST['awards'];
$year=$_POST['year'];
$rating=$_POST['rating'];

$sql="INSERT INTO movie(PID,Director,movie_name,awards,year,rating)
        VALUES('$pid','$director','$moviename','$awards','$year','$rating')";

$r=mysql_query($sql,$db) or die(mysql_error($db));

header("Location:addmovie.php");

?> 
