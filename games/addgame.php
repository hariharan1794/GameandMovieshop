<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Adding Games </title>
<link rel ="stylesheet" type="text/css" href="gmstyle.css">
</head>
<body bgcolor="red">
<div id ="pgwrap">
<form action="addgameinsert.php" method="POST">
<h>FILL UP THE FORM TO ADD NEW GAMES</h>
<br><br>
ADD PRODUCTID    : <input type="text" name="pid" placeholder="PID"><br>
<br><br>
GAME NAME     : <input type="text" name="gamename" placeholder="GAMENAME"><br>
<br><br>
PUBLISHERS  : <input type="text" name="publishers" placeholder="PUBLISHERS"><br>
<br><br>
PLATFORMS    : <input type="text" name="platforms" placeholder="PLATFORMS"><br>
<br><br>
AWARDS    : <input type="text" name="awards" placeholder="AWARDS"><br>
<br><br>
YEAR    : <input type="text" name="year" placeholder="YEAR"><br>
<br><br>
RATING    : <input type="number" name="rating" placeholder="RATING"><br>
<br><br>
<button type="submit">ADD THE PRODUCT</button>
</form>
</div>
</body>
</html>