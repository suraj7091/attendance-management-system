<?php
 
?>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
function validateForm()
{
	  var input,file;
    input=document.getElementById("fileinput");
        file=input.files[0];   

var a=document.forms ["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["roll_no"].value;
var d=document.forms["reg"]["college"].value;
var g=document.forms["reg"]["confirm"].value;
var h=document.forms["reg"]["password"].value;
if (a==null || a=="")
  {
  alert("First name must be filled out");
  
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("roll no must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("college name must be filled out");
  return false;
  }

if (g!=h )
  {
  alert("password not matched");
  return false;
  }
if (h==null || h=="")
  {
  alert("password must be filled out");
  return false;
  }
  if(h.length<8)
  {
  alert("password must be of 8 char length");
  return false;
  }
  if(file.size>409600)
{
	alert(" file size should be smaller than 400 kb");
	return false;
}
}
</script>

<title>registration</title>
<style>

</style>
</head>

<body>
<div class="container">
<div class="image">
<img src="register.png" width="30%" class="img"/>
</div>
<form name="reg" id="register" action="code_exec.php" onSubmit="return validateForm()" method="post" enctype="multipart/form-data">
<table width="1195" height="460" border="0" align:"center" cellpadding="0" cellspacing="0">
  
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="1100"><input type="text" name="fname" placeholder="firstname" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" placeholder="last name"  /></td>
  </tr>
  <tr>
  <td><div align="right">your image:</div></td>
  <td><div style="margin-left:20px;"><button class="file-upload" >            
  <input type="file" class="fileinput" name="userfile" id="fileinput">choose file</button>
</div></td>
  </tr>
  <tr>
    <td><div align="right">Enrollment no:</div></td>
    <td><input type="text" name="roll_no" placeholder="roll no"  /></td>
  </tr>

 
  <tr>
    <td><div align="right">College:</div></td>
    <td><input type="text" name="college" placeholder="e.g:University school of information technology"  /></td>
  </tr>
  <tr>
    <td><div align="right">Stream:</div></td>
    <td><select name="stream" id="stream" style="width:90%;
padding:10px 10px;
margin:18px;
display:inline-block;
border:1px solid #333399">
<option value="cse" selected>cse</option>
<option value="ece">ece</option>
<option value="it">it</option>
<option value="bce">bce</option>
<option value="ct">ct</option>
</select></td>
  </tr>
  <tr>
    <td><div align="right">Semester:</div></td>
    <td><select id="semester" name="semester" style="width:90%;
padding:10px 10px;
margin:18px;
display:inline-block;
border:1px solid #333399">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select></td>
  </tr>
 
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="password" placeholder="Must be of length 8 charracter" /></td>
  </tr>
  <tr>
    <td><div align="right">confirm password:</div></td>
    <td><input type="password" name="confirm"  /></td>
  </tr>
</table>
<table style="background-color:#006666 ;"><tr>
    <td  style="width:500px;"><button  type="submit" name="submit" value="Submit"   style="background-color:#336600; color:white;padding:10px 20px;margin:18px 12px;cursor:pointer;border:1px solid #003333;width:40%;margin-left:20px">submit</button></td>
	<td style="width:700px;"><button type="button" class="cancel"  style="background-color:#336600; color:white;padding:10px 20px;margin:18px 12px;cursor:pointer;border:1px solid #003333;width:30%; margin-left:380px;"><a href="login.php">login</a></button></td></tr>
	</table>
</form>
</div>
 	
</body>

</html>