 
    <?php
    session_start();
    include('connection.php');
	$roll=$_SESSION['SESS_FIRST_NAME'];
    $lname=$_POST['text2'];
    $check="UPDATE member SET lname='$lname'  WHERE roll_no='$roll'";
    $rs = mysqli_query($bd,$check);
    if($rs){
    echo'database updated';}
    ?>
