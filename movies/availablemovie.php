<?php
include "dblog.php";
$query = "SELECT * from movie";
$result = mysql_query($query, $db) or die(mysql_error($db));

$num_movies = mysql_num_rows($result);

?>
<html>
<body bgcolor="chucknorr">
<div id ="pgwrap">
<div style=”text-align: center;” >
<h2 > List of Available Movies </h2 >
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;” >
<tr>
<th> Product ID </th>
<th> Director </th>
<th> movie_name </th>
<th> awards </th>
<th> Year</th>
<th> Rating</th>
</tr>
</body>

<?php
// loop through the results
while ($row = mysql_fetch_array($result)) {
extract($row);
echo "<tr>";
echo "<td>" . $PID . " </td> ";
echo "<td>" . $Director . " </td> ";
echo "<td>" . $movie_name . " </td> ";
echo "<td>" . $awards . " </td> ";
echo "<td>" . $year . " </td> ";
echo "<td>" . $rating . " </td> ";
echo "</tr>";
}
?>
</table>
<p> <?php echo $num_movies;?> Movies Available </p >
</div>
</div>
</html>