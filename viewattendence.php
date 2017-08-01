<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
function validateForm()
{
	var a=document.forms ["select"]["subject"].value;
	if(a=="")
	{
		alert("select appropraite subject");
		return false;
	}

}
</script>
</head>
<body>
<div style="border:2px  dashed #1D41E9;height:800px;">
<p style="margin-left:400px;font-weight:bold;color:#1F9874">SELECT THE SUBJECT </p>
<?php
session_start();
include('connection.php');
$roll_no=$_SESSION['SESS_FIRST_NAME'];
$result=mysqli_query($bd,"SELECT * FROM member WHERE roll_no='$roll_no'");
$row = mysqli_fetch_array($result);
$b=$row["stream"].$row["semester"];
mysqli_close($bd);
echo'<form name="select" method="post" action="one.php" onSubmit="return validateForm()">';
$result1=mysqli_query($bd1,"SELECT * FROM $b");
while($row1= mysqli_fetch_array($result1))
{
		echo'<input type="radio" name="subject" id="subject" value="'.$row1[1].'"  style="margin-left:100px;margin-top:10px;">',$row1[1];
		echo nl2br("\n");
	
}
echo'<button type="submit" value="submit" name="submit" style="margin-left:100px;margin-top:40px;background-color:#0F65AB;border:none;width:1000px;">submit</button>';

	echo'<button type="button" name="home" class="buttons" style="width:1000px;margin-top:20px;border:none;background-color:#0F65AB; margin-left:100px;"/><a href="home.php" style="text-decoration:none;">home</a></button>';
	echo'<hr style="margin-top:50px">';
echo'</form>';
?>
</div>
</bod

><html>