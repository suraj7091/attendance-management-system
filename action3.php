    
    <?php
    session_start();
    include('connection.php');
		    include('connection.php');
		$roll_no=$_SESSION['SESS_FIRST_NAME'];
		$semester=$_POST['dp2'];
		$result=mysqli_query($bd,"SELECT * FROM member WHERE roll_no='$roll_no'");
$row = mysqli_fetch_array($result);
$stream=$row['stream'];
$semester1=$row['semester'];
mysqli_close($bd);
$add=$stream.$semester1;
$result1=mysqli_query($bd1,"SELECT * FROM $add");
while($row1 = mysqli_fetch_array($result1))
    {
   $bd4= mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd4, $stream.$semester1) or die("Could not select database");
$row1[1]= mysqli_real_escape_string($bd4,$row1[1]);
$k="DELETE FROM `$row1[1]` WHERE roll_no='$roll_no'";
   mysqli_query($bd4,$k);
   } 
   mysqli_close($bd4);
   $add=$stream.$semester;
$result1=mysqli_query($bd1,"SELECT * FROM $add");
while($row1 = mysqli_fetch_array($result1))
    {
   $bd4= mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd4, $stream.$semester) or die("Could not select database");
$row1[1]= mysqli_real_escape_string($bd4,$row1[1]);
$k="INSERT INTO `$row1[1]`(`roll_no`) VALUES ('$roll_no')";
   mysqli_query($bd4,$k);
   } 

   include('connection.php');
    
    $check="UPDATE member SET semester='$semester' WHERE roll_no='$roll_no'";
    $rs = mysqli_query($bd,$check);
    if($rs){
    echo'database updated';}
    ?>
>
