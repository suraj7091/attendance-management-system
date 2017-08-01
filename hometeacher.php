<?php
session_start();
if(!isset($_SESSION['SESS_FIRST_NAME']) || (trim($_SESSION['SESS_LAST_NAME']) == '')) {
		header("location:login.php");
		exit();}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WELCOME TO ATTENDENACE</title>
<style>
.buttons{
margin-left:10px;
margin-top:15px;
border:1px solid #009999;
border-radius:4px;
color:#993300;
background-color:#00FFCC;
}
</style>
</head>

<body><div style="border:2px solid #009900;width:100%;height:700px;margin-top:0px;padding-top:20px;">
<div style="background-color:#99FFCC;height:50px;width:600px;margin-left:300px;border:1px solid #000099;border-radius:8px;">
<button type="button" name="home" class="buttons" style="margin-left:80px;"><a href="hometeacher.php"style="text-decoration:none">home</a></button>
<button type="button" name="viewprofile" class="buttons" ><a href="viewprofileteacher.php" style="text-decoration:none">view profile</a></button>
<button type="button" name="feedattendence" class="buttons"><a href="feedattendence.php" style="text-decoration:none">feed attendence</a></button>
<button type="button" name="viewclaassrecord" class="buttons"><a href="viewclassrecordteacher.php" style="text-decoration:none">view class record</a></button>
<button type="button" name="logout" class="buttons"><a href="logout.php" style="text-decoration:none">logout</a></button></div>
<div style="margin-top:20px;border:1.5px solid #00FF66">
<a
</div>
</div>
<div>
<p style="font-weight:bold;margin-left:400px;">WELCOME TO ATTENDENCE MANAGEMENT SYSTEM</p>
<P style="margin-left:200px">This portal is based on attendence management system .it  is used for taking attendence digitally and publishing </br>
student record to web so that it is available to all .such that it is available to parents so that they can see what their</br>
ward are doing during class time. it also helps student in knowing their records for time
</P>
</div>
</body>
</html>
