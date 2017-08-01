<?php
	//Start session
	session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "simple_login";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
	$errmsg_arr = array();
	$errflag = false;
	$roll_no = $_POST['roll_no'];
	$password = $_POST['password'];
 	$result=mysqli_query($bd,"SELECT * FROM member WHERE roll_no='$roll_no' AND password='$password'");
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_FIRST_NAME'] = $member['roll_no'];
			
			session_write_close();
			header("location: home.php");
			exit();
		}else {
			$errmsg_arr[] = 'roll_no and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: login.php");
				
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>