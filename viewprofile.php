
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>view profile</title>
<style>

.first
{ 
border:4px solid #0A3924;
font-size:26px;
}
.image
{
border-radius:30%;	
}
.buttons
{
	background-color:#00FFCC	;
	width:300px;
	height:50px;
	margin-top:20px;
}
.second
{
	font-size:20px;
	margin-left:10px;
}
</style>
</head>
<body>
<div style="border:2px solid #CB8889 ;height:740px;">

<?php
include('connection.php');
session_start();
$roll=$_SESSION['SESS_FIRST_NAME'];
//$sql = "SELECT * FROM 'member' where roll_no=roll";
$result=mysqli_query($bd,"SELECT * FROM member WHERE roll_no='$roll'");
$row = mysqli_fetch_array($result);
echo'<div class="first" style="overflow:hidden;margin:5px 5px 5px 5px;">';
echo'<div style="float:left;margin-left:60px;margin-top:25px;margin-bottom:5px;">';
	  echo '<img height="300" width="280"class="image" src=" data:image/jpeg;base64,'.base64_encode($row['content']).'"/>';
	  echo'</div>';
	  echo'<div style="float:left;margin-left:130px;margin-top:155px;">';
	  echo nl2br( "Name=".$row["fname"]. "");
	  echo nl2br(" ".$row["lname"]."\n");
	  echo nl2br("Roll no=".$row["roll_no"]."\n");
	  echo nl2br("College=".$row["college"]."\n");
	  echo nl2br("Stream=".$row["stream"]."\n");
	  echo "Semester=".$row["semester"]."";
	  echo'</div>';
	  echo'<div style="float:left;margin-top:50px;margin-left:100px;">';
	  echo'<table>';
	  echo'<tr>';
echo'<td><button type="button" name="home" class="buttons" style=""><a href="home.php"style="text-decoration:none">home</a>';
	  echo'</button></td>';
	  echo'</tr>';
	  echo'<tr>';
echo'<td><button type="button" name="logout" class="buttons"><a href="logout.php" style="text-decoration:none">logout</a></button></td>	';
echo'</tr>';
echo'<td><tr><button type="button" name="change account details" class="buttons"><a href="changedetails.php" style="text-decoration:none">change account details</a></button></td></tr>	';
echo'</tr>';
echo'</table>';
       echo'</div>';
	  echo'</div>'; 
	  
	  ?>
      <div style="border:2px solid #49670F ;height:378px;margin-left:5px;margin-right:5px; ">
      <p style="margin-left:430px;border:2px solid #C7D728;margin-right:750px;font-size:30px;">faculty teaching you</p>
      <hr style="border-width:2px;">
      <?php
$stream=$row["stream"];

$semester=$row["semester"];
$add=$stream.$semester;
$result1=mysqli_query($bd1,"SELECT * FROM $add");
$i=1;
while($row1 = mysqli_fetch_array($result1))
    {

		echo '<div class="second">';
		echo $i,'.';
		echo'name='.$row1[0].'';
		$j=100-strlen($row1[0]);
		echo str_repeat('&nbsp;',$j); 
		echo nl2br("subject=$row1[1]\n");
		echo'</div>';
		$i++;
		
	}
	  ?>
      
      </div>
</div>
</body>
</html>
