    
    <?php
    session_start();
    include('connection.php');
		$roll=$_SESSION['SESS_FIRST_NAME'];
    $fname=$_POST['text1'];
    $check="UPDATE member SET fname='$fname' WHERE roll_no='$roll'";
    $rs = mysqli_query($bd,$check);
    if($rs){
    echo'database updated';}
    ?>
