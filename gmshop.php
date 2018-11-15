<?php
$db=mysqli_connect('localhost','root','Hariican17')
or die(mysqli_error($db));

?>



<html lang="en">
<head>
<meta charset = "UTF-8">
<title>The GM Shop</title>
<link rel="stylesheet" type="text/css"  href="gmstyle.css"/>
</head>
<body>
<div id ="container">
    <div id ="header">
<h1>THE GAME AND MOVIE SHOP</h1>
    </div>
    <div id ="navigation">
	<ul>
	<li><a>HOME</a></li>
	<li><a>LOGIN</a>
	<ul>
	<li><a href=log.php>CUSTOMERS</a></li>
	<li><a href=loge.php>EMPLOYEES</a></li>
	</ul>
	
	</li>
		<li><a href=contactus.php>CONTACT US</a></li>
	</ul>
	</div>

</div>
</body>
</html>
