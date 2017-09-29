
<!doctype html>
<html lang="en">
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () { 
$('#submit_button').click(function(event){

	event.preventDefault();
	$.ajax({
		url:"final.php",
		method:"post",
		data:$('form').serialize(),
		datatype:"text",
		success:function(strMessage){
			alert(strMessage);
			
		}
	});
	
})
})
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
function validateForm()
{
	var a=document.forms ["attend"]["datepicker"].value;
	if(a=="")
	{
		alert("select appropraite date");
		return false;
	}

}
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>feed attendence</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ minDate: -60, maxDate: "+0M +0D" });
	 $("#datepicker").datepicker({dateFormat:"dd-mm-yy"});
	

  } );
  </script>
 
</head>
<body>

<div style="border:2px  groove #0D788E ; height:800px;">

<form action="final.php" name="attend" method="post" onSubmit=" return validateForm()">
<p style="margin-left:400px;font-weight:bold; font-size:18px;color:#163786"> SELECT THE DATE TO FEED ATTENDENACE</p>
<p style="margin-left:400px;color:#B921CD">Date: <input type="text" name="datepicker" id="datepicker" style="width:300px;"></p> 
<hr>
<div style="font-size:28px;">
<?php
	session_start();
	$a=$_POST['att'];
	$piece=explode(' ', $a, 2);
	$b=$piece[0];
	$c=$piece[1];
	$_SESSION['$b'] = $piece[0];
	$_SESSION['$c'] = $piece[1];	
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database =$b;
$mysql_database1 ="simple_login";
$bd1= mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd1, $mysql_database1) or die("Could not select database");
$result1=mysqli_query($bd1,"SELECT * FROM member");
$i=1;
while($row1 = mysqli_fetch_array($result1))
    {
		
		$p=$row1[6];
		$q=$row1[7];
		$r=$p.$q;
		//echo $r;
		if($r==$b)
		{
			
				echo'<div style="float:left;"> ';
			echo $i,'.';
		
		echo $row1[0],' ',$row1[1];
		echo str_repeat('&nbsp;',20);
		echo $row1[3],' ';
		echo'</div>';
echo'<div align="right" style="margin-right:100px;"><select id="'.$row1[3].'" name="'.$row1[3].'" style="width:30%;
padding:10px 10px;
margin-top:10px;
margin-left:50px;
display:inline-block;
border:1px solid #333399">
<option value="present">present</option>
<option value="absent">absent</option></select></div>';
		echo nl2br("\n");
		$i++;
		}
	}

$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
	 
?>
</div>
<div align="right" style="margin-left:40px;">
<button  type="button" name="submit_button" value="Submit_button" id="submit_button" style="background-color:#336600; color:white;padding:10px 20px;margin:18px 12px;cursor:pointer;border:1px solid #003333;width:20%;margin-left:20px">submit</button></div>
<div align="left" style="margin-left:20px;margin-top:0px;">
<button type="button" name="home" class="buttons" style="width:20%;height:40px;border:none;background-color:#0B846C;"><a href="hometeacher.php"style="text-decoration:none">home</a></button></div>

</form>

</div>
</body>
</html>
