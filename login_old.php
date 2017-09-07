<?php
session_start();
if(isset($_SESSION['SESS_FIRST_NAME'])&&!isset($_SESSION['SESS_FIRST_NAME'])) {
    header("Location:home.php"); // redirects them to homepage
    exit; // for good measure
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;" />
<title>attendendance management system</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js"></script>

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
