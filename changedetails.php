
<html>
<head>

<title>change details</title>
<style>
input[type=text],[type=password]
{
	
	width:400px;
	margin:18px;
}
</style>


</head>

<body>
<p id="message"></p>
<div style="border:2px solid #1397AC ;height:780px;">

<form name="change" method="post" >
<table >
<tr style="border:2px solid #5D33D3;">
<td>change first name:</td>
<td><input type="text" name="text1" id="text1"/></td><td><button type="button" name="submit_button"   id="submit_button"  style="width:150px;border:none;background-color:#1397AC; margin-left:60px;">update</button></td>


</tr>
<tr><td margin-left:20px;>change  last name:</td><td><input type="text" name="text2" id="text2"/></td><td><button type="button" name="lname" value="lname" id="submit_button1" style="width:150px;border:none;background-color:#1397AC; margin-left:60px;">update</button></td></tr>
</table>
<table >	 
<tr height="100px">
<td >change your stream:</td>
<td ><select name="dp1" id="dp1">
<option value="cse" selected>cse</option>
<option value="ece">ece</option>
<option value="it">it</option>
<option value="bce">bce</option>
<option value="ct">ct</option>
</select></td>
<td><button type="button" name="submit" value="submit" id="submit_button2" style="width:150px;border:none;background-color:#1397AC;margin-left:436px;">update </button>
</td>
</tr>
<tr>
<td>change your semester:</td>
<td><select name="dp2" id="dp2">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</td>
<td width="500px">
<button type="button" name="submit_button3" value="submit" id="submit_button3" style="width:150px;border:none;background-color:#1397AC;margin-left:436px;">update </button></td>
</tr>

</table>
</form>
<button type="button" name="home" class="home" style=" width:20%;border:none;background-color:#1397AC;margin-left:100px;margin-top:40px;"><a href="home.php"style="text-decoration:none">home</a></button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () { 
$('#submit_button').click(function(event){
	var textcontent = $("#text1").val();
	if(textcontent=="")
	{
		alert("enter some text");
	}
	else{
	event.preventDefault();
	$.ajax({
		url:"action.php",
		method:"post",
		data:$('form').serialize(),
		datatype:"text",
		success:function(strMessage){
			alert(strMessage);
			
		}
	});
	}
})
})
$(document).ready(function () { 
$('#submit_button1').click(function(event){
	var textcontent = $("#text2").val();
	if(textcontent=="")
	{
		alert("enter some text");
	}
	else{
	event.preventDefault();
	$.ajax({
		url:"action1.php",
		method:"post",
		data:$('form').serialize(),
		datatype:"text",
		success:function(strMessage){
			alert(strMessage);
			
		}
	});
	}
})
})
$(document).ready(function () { 
$('#submit_button2').click(function(event){
	var textcontent = $("#dp1").val();
	event.preventDefault();
	$.ajax({
		url:"action2.php",
		method:"post",
		data:$('form').serialize(),
		datatype:"text",
		success:function(strMessage){
			alert(strMessage);
			
		}
	});
	
})
})
$(document).ready(function () { 
$('#submit_button3').click(function(event){
	var textcontent = $("#dp2").val();
	event.preventDefault();
	$.ajax({
		url:"action3.php",
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

</div>	
</body>
</html>