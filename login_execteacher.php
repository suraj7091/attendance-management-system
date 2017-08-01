<?php
	//Start session
	session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "teacher_login";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
	$errmsg_arr = array();
	$errflag = false;
	$id = $_POST['id'];
	$password = $_POST['password'];
 	$result=mysqli_query($bd,"SELECT * FROM member WHERE id='$id' AND password='$password'");
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_FIRST_NAME'] = $member['id'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			session_write_close();
			header("location: hometeacher.php");
			exit();
		}else {
			$errmsg_arr[] = 'id and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: loginteacher.php");
				
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>