<html>
<head>
<title>
feed attendence
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
function validateForm()
{
	var a=document.forms ["select"]["att"].value;
	if(a=="")
	{
		alert("select appropraite branch and subject");
		return false;
	}

}
</script>
</head>
<body >
<div style="border:2px solid #B44143;height:800px;">
<p style="font-weight:bold;margin-left:400px">SELECT CLASS TO WHICH YOU HAVE TO FEED ATTENDENCE</p>
<hr>
<?php
include('connection.php');
session_start();
$id=$_SESSION['SESS_FIRST_NAME'];
$t="SELECT table_name FROM information_schema.tables WHERE  table_schema = 'faculty'";
$result=mysqli_query($bd1,$t);
$i=0;
while($row1=mysqli_fetch_array($result))
{
	
	 
	  $college[$i]=$row1[0];
	  $i++;
}
	  echo '<form name="select" action="viewrecordfinal.php" method="post" onSubmit=" return validateForm()">';
$i=1;
$j=0;
for($j=0;$j<12;$j++){
	$result1=mysqli_query($bd1,"SELECT * FROM $college[$j] where id='$id'");
	if($result1){
while($row1 = mysqli_fetch_array($result1))
    {
		$college1=$college[$j];

$subject=$row1[1];
$a=" ";
//$add2=$college1.$subject;
$add1=$a.$subject;
$add=$college1.$add1;

		
		echo'<input type="radio" name="att" value="'.$add.'"  style="margin-left:100px;margin-top:10px;">',$add;
		echo nl2br("\n");
	
		
	}}}

	echo nl2br("\n");
	echo'<button type="submit" value="submit" name="submit" style="margin-left:100px;background-color:#0F65AB;border:none;width:1000px;">submit</button>';
		echo'</form>';
	

?>
	<button type="button" name="home" class="buttons" style="width:1000px;border:none;background-color:#0F65AB; margin-left:100px;"/><a href="hometeacher.php" style="text-decoration:none;">home</a></button>
  
	
</div>
</body>
</html>
