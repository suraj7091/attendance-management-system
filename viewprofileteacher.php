
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>view profile</title>
<style>

.first
{ 
border:3px solid #0A3924;
font-size:25px;
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
$id=$_SESSION['SESS_FIRST_NAME'];
//$sql = "SELECT * FROM 'member' where roll_no=roll";
$result=mysqli_query($bd2,"SELECT * FROM member WHERE id='$id'");
$row = mysqli_fetch_array($result);
echo'<div class="first" style="overflow:hidden;margin:5px 5px 5px 5px;">';
echo'<div style="float:left;margin-left:60px;margin-top:25px;margin-bottom:5px;">';
	  echo '<img height="300" width="280"class="image" src=" data:image/jpeg;base64,'.base64_encode($row['content']).'"/>';
	  echo'</div>';
	  echo'<div style="float:left;margin-left:130px;margin-top:155px;">';
	  echo nl2br( "Name=".$row["name"]. "\n");
	  echo nl2br("id=".$row["id"]."\n");
	  echo nl2br("College=".$row["college"]."\n");
	  echo'</div>';
	  echo'<div style="float:left;margin-top:50px;margin-left:100px;">';
	  echo'<table>';
	  echo'<tr>';
echo'<td><button type="button" name="home" class="buttons" style=""><a href="hometeacher.php"style="text-decoration:none">home</a>';
	  echo'</button></td>';
	  echo'</tr>';
	  echo'<tr>';
echo'<td><button type="button" name="logout" class="buttons"><a href="logout.php" style="text-decoration:none">logout</a></button></td>	';
echo'</tr>';
echo'</tr>';
echo'</table>';
       echo'</div>';
	  echo'</div>'; 
	  
	  ?>
      <div style="border:2px solid #49670F ;height:378px;margin-left:5px;margin-right:5px; ">
      <p style="margin-left:450px;border:2px solid #C7D728;margin-right:750px;font-size:30px;">classes you teach</p>
      <hr style="border-width:2px;">
      <?php
	  include('connection.php');
	 	 $t="SELECT table_name FROM information_schema.tables WHERE  table_schema = 'faculty'";
$result3=mysqli_query($bd1,$t);
$i=0;
while($row1=mysqli_fetch_array($result3))
{
	
	 
	  $college[$i]=$row1[0];
	  $i++;
}
$i=1;
$j=0;
for($j=0;$j<12;$j++){
	$result1=mysqli_query($bd1,"SELECT * FROM $college[$j] where id='$id'");
	if($result1){
while($row1 = mysqli_fetch_array($result1))
    {

		echo '<div class="second">';
		echo $i,'.';
		echo'name='.$row1[0].'';
		$k=100-strlen($row1[0]);
		echo str_repeat('&nbsp;',$k); 
		echo"class=";
		echo $college[$j];
		$k=60-strlen($college[$j]);
		echo str_repeat('&nbsp;',$k);
		echo nl2br("subject=$row1[1]\n");
		echo'</div>';
		$i++;
		
	}}}
	  ?>
      
      </div>
</div>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>