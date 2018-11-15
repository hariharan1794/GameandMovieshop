
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EMPLOYEE Login</title>
<link rel ="stylesheet" type="text/css" href="gmstyle.css">
</head>
<body bgcolor="Red">
<div id ="pgwrap">
<h3>WELCOME TO OUR LOGIN PAGE EMPLOYEES</h>
<br><br>
<form action="logone.php" method="POST">
<input type="number" name="ssn" placeholder="SSN"><br>
<br><br>
<input type="password" name="pwd" placeholder="PASSWORD"><br>
<br><br>
<button type="submit">LOGIN</button>
<br><br>
</form>
   <br><br>
   If YOU ARE NEW JUST SIGNUP
   <br><br>
  
<form action="signupe.php" method="POST">
Enter Your SSN      : <input type="text" name="ssn" placeholder="SSN"><br>
<br><br>
Enter Your NAME     : <input type="text" name="name" placeholder="NAME"><br>
<br><br>
Enter Your ADDRESS  : <input type="text" name="address" placeholder="ADDRESS"><br>
<br><br>
Enter Your D.O.B    : <input type="date" name="dob" placeholder="DOB"><br>
<br><br>
Enter Your SEX      : <select><option>M</option><option>F</option></select><br>
<br><br>
Enter a PASSWORD    : <input type="password" name="pwd" placeholder="PASSWORD"><br>
<br><br>
Enter Your SHOPNAME : <input type="text" name="shopname" placeholder="SHOPNAME"><br>
<br><br>
<button type="submit">SIGN UP</button>

</form>
</div>
</body>
</html>
