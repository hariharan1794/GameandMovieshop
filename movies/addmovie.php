<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Adding Movie </title>
<link rel ="stylesheet" type="text/css" href="gmstyle.css">
</head>
<body>
<div id ="pgwrap">
<form action="addmovieinsert.php" method="POST">
<h>FILL UP THE FORM TO ADD NEW MOVIES</h>
<br><br>
ADD PRODUCTID    : <input type="text" name="pid" placeholder="PID"><br>
<br></br>
MOVIE NAME     : <input type="text" name="moviename" placeholder="MOVIENAME"><br>
<br></br>
DIRECTOR : <input type="text" name="director" placeholder="DIRECTOR"><br>
<br></br>
AWARDS    : <input type="text" name="awards" placeholder="AWARDS"><br>
<br><br>
YEAR    : <input type="text" name="year" placeholder="YEAR"><br>
<br><br>
RATING    : <input type="number" name="rating" placeholder="RATING"><br>
<br><br>
<button type="submit" id="test">ADD THE PRODUCT</button>
</form>
</div>
</body>
</html>