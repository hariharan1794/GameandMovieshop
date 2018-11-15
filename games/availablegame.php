<?php
include "dblog.php";
$query = "SELECT * from videogame";
$result = mysql_query($query, $db) or die(mysql_error($db));

$num_games = mysql_num_rows($result);

?>
<html>
<body bgcolor="yellow">
<div style=”text-align: center;” >
<h2 > List of Available Games </h2 >
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;” >
<tr>
<th> Product ID </th>
<th> Game Name </th>
<th> Publishers </th>
<th> Platform </th>
<th> Award </th>
<th> Year</th>
<th> Rating</th>
</tr>
</body>
</html>
<?php
// loop through the results
while ($row = mysql_fetch_array($result)) {
extract($row);
echo "<tr>";
echo "<td>" . $PID . " </td> ";
echo "<td>" . $gamename . " </td> ";
echo "<td>" . $Publishers . " </td> ";
echo "<td>" . $Platform . " </td> ";
echo "<td>" . $awards . " </td> ";
echo "<td>" . $year . " </td> ";
echo "<td>" . $rating . " </td> ";
echo "</tr>";
}
?>
</table>
<p> <?php echo $num_games;?> Movies Available </p >
</div>