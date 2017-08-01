<?php
session_start();
$d=$_POST['datepicker'];
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$b= $_SESSION['$b'];
$c= $_SESSION['$c'];
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $b) or die("Could not select database");
$check="COL_LENGTH('$c','$d')";
$result4=mysqli_query($bd,$check);

$result1=mysqli_query($bd,"ALTER TABLE `$c` ADD `$d` VARCHAR(30) NOT NULL AFTER `roll_no`;");
$result=mysqli_query($bd,"SELECT * FROM `$c`");
while($row1= mysqli_fetch_array($result))
{
	$e=$_POST[$row1[0]];
	$result3="UPDATE `$c` SET `$d`='$e' WHERE roll_no=$row1[0]";
	$rs1 = mysqli_query($bd,$result3);
}
echo"attendence  feeded correctly";
?>