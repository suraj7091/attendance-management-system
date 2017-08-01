<?php
session_start();
if(isset($_SESSION['SESS_FIRST_NAME'])&&!isset($_SESSION['SESS_FIRST_NAME'])) {
     header("Location:home.php"); // redirects them to homepage
     exit; // for good measure
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>attendendance management system</title>
<style>
form
{
border:3px solid #CCFF33;
}
input[type=text],input[type=password]
{
width:92%;
padding:10px 10px;
margin:18px;
display:inline-block;
border:1px solid #333399
box sizing:border-box;
}
.box
{
border:1px solid #990000;
background-color:#990000;
color:#000000;
margin-left:20px;
width:300px;
height:50px;
border-radius:6px;
}
button
{
background-color:#336600;
color:whilte;
padding:10px 20px;
margin:18px 12px;
 cursor:pointer;
 border:none;
 width:95%;

}
.arrow-up
{
 width: 0; 
  height: 0; 
  border-left: 40px solid transparent;
  border-right: 40px solid transparent;
  border-bottom: 10px solid #990000;
  margin-left:130px;	
  
}
button:hover
{
opacity:0.8;
}
.cancelbtn{
    width:10%;
    padding:10px 12px;
    background-color:#f44336;
}
.imgcontainer
{
text-align:center;
margin:24px 0 12px 0;
}
img.avatar{
width:18%;
border-radius:50%;
}
.container
{
padding:20px;
}
span.psw{
float:right;
padding-top:16px;
}
 @media screen and (max-width: 700px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}
img.avatar1111 {width:18%;
border-radius:50%;
}
</style>

</head>
<body>
<form action="login_exec.php" name="login" method="post">
<div class="imgcontainer"><img src="img_avatar2.png"  width="23%" class="avatar1111"/></div>
<div class="container">
<label><b>enrollment no</b></label>

<label></label>
<input type="text" name="roll_no" size=" "maxlength=" " placeholder="roll no"/>
<label ><b>password</b> </label>
<input type="password" placeholder="password" name="password" required />

<?php

			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo'<div class="arrow-up">';
			echo'</div>';
		   echo '<div class="box">';
		   echo'<p>';
		   echo"password or roll no do not match";
		   echo'</p>';
		   echo'</div>';
			unset($_SESSION['ERRMSG_ARR']);
		}
		?>
<button type="submit">login</button>
<div style="margin:auto">
  <input name="checkbox" type="checkbox" checked="checked"  />
remember me
</div>
</div>
<div class="container" style="background-color:#339999">
<button type="button" class="cancelbtn">cancel</button>
<button type="button" style="width:100px;"class="signup"><a href="index.php">signup</a></button>
<button type="button" style="width:200px; background-color:#EFD910"class="loginasteacher"><a href="loginteacher.php" style="text-decoration:none">login as teacher</a></button>
<span class="psw">forgot<a href="http://www.google.com">password?</a></span>
</div>

</div>
</form>
</body>
</html>
