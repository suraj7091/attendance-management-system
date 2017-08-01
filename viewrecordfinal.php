<!doctype html>
<html>
<head>
<style>
table, tr,td {
    border: 1px solid #650EE0;
	border-collapse: collapse;
	 padding: 5px;
}
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div style="border:2px outset #61CB0C;">
<p style="margin-left:400px;font-size:24px;">CLASS RECORD IS</p>
<hr>
<?php
session_start();
include('connection.php');

	$a=$_POST['att'];
	$piece=explode(' ', $a, 2);
	$b=$piece[0];
	$c=$piece[1];
$bd1= mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd1,$b) or die("Could not select database");
$t="SELECT column_name FROM information_schema.columns WHERE table_name = '$c'AND table_schema = '$b'";
$result1=mysqli_query($bd1,$t);
echo'<table style="font-size:24px;margin-left:300px;margin-top:100px;">';
while($row1=mysqli_fetch_array($result1))
{
	echo'<tr>';
	echo '<td>',$row1[0],'</td>';
	$result2=mysqli_query($bd1,"select * from `$c`");
	
	while($row2=mysqli_fetch_array($result2))
	{
	echo'<td>',$row2[$row1[0]],'</td>';
	}
}
echo'</tr></table>';
echo'<button type="button" name="home" class="buttons" style="width:1000px;margin-top:100px;margin-bottom:300px;border:none;background-color:#0F65AB; margin-left:100px;"/><a href="hometeacher.php" style="text-decoration:none;">home</a></button>';
	mysqli_close($bd1);
	?>
    </div>
</body>
</html>