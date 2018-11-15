<?php
session_unset();
?>
<html>
<head>
<title>Please Log In</title>
</head>
<body>
<form meathod="post" action="movie1.php">
<p>Enter user name:
<input type="text" name="user"/>
</p>
<p>enter password:
<input type="password" name="pass"/>
</p>
<p>
<input type="submit" name="submit" value="Submit"/>
</p>
</body>
</html>
