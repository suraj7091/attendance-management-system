<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$confirm=$_POST['confirm'];
$roll_no=$_POST['roll_no'];
$password=$_POST['password'];
$college=$_POST['college'];
$stream=$_POST['stream'];
$semester=$_POST['semester'];
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$fp= @fopen($tmpName,'r');
$content = @fread($fp, $fileSize);
$content = addslashes($content);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
@fclose($fp);
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
/*$bd=mysqli_connect("localhost","root","","simple_login");*/
$check="SELECT * FROM member WHERE roll_no = '$_POST[roll_no]'";
$rs = mysqli_query($bd,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0]>1) {
    echo "User Already in Exists with this roll_no <br/>";
} 
else
{
   mysqli_query($bd, "INSERT INTO member(fname, lname, confirm,roll_no,password,college,stream, semester,name,size,type,content)VALUES('$fname','$lname', '$confirm', '$roll_no', '$password', '$college', '$stream', '$semester','$fileName', '$fileSize', '$fileType', '$content')");
   mysqli_close($bd);
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
        echo "You are now registered<br/>";
		}
 

?>