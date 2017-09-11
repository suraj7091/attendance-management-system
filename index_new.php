<?php
session_start();
if(isset($_SESSION['SESS_FIRST_NAME'])&&!isset($_SESSION['SESS_FIRST_NAME'])) {
    header("Location:home.php"); // redirects them to homepage
    exit; // for good measure
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/mdb.css" rel="stylesheet">
    <link href="css/compile.min.css" rel="stylesheet">
	
    <style rel="stylesheet"> 
        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }
    </style>
</head>

<body>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mb-r">
                <form name="reg" id="register" action="code_exec.php" onSubmit="return validateForm()" 
                method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="md-form">                     
								<input id="cyanForm-fname" class="form-control" type="text" name="fname" required>
								<label for="cyanForm-fname">First Name</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="md-form">                     
								<input id="cyanForm-lname" class="form-control" type="text" name="lname" required>
								<label for="cyanForm-lname">Last Name</label>
							</div>
						</div>
					</div><!--form row-->					
					
					<div class="md-form">                     
						<input id="cyanForm-roll" class="form-control" type="text" name="roll_no" required>
						<label for="cyanForm-roll">Enrollment #</label>
					</div>
					
					<div class="row">
						<div class="col-md-4">
							<div class="md-form">                     
								<input id="cyanForm-roll" class="form-control" type="text" name="school" required>
								<label for="cyanForm-roll">University School</label>
							</div>
						</div>						
						<!-- <div class="col-md-4">						                     -->
							<select name="stream" class="mdb-select">
								<option value="" disabled selected>Choose your option</option>
								<option value="1">CSE</option>
								<option value="2">ECE</option>
								<option value="3">IT</option>
							</select>
							<label>Stream</label>						
						<!-- </div> -->
						<div class="col-md-4">
							<div class="md-form">                     
								
							</div>
						</div>					
					</div>

                </form>
            </div>
        </div><!--row-->
    </div>
</main>

<!--Footer-->
<!--/.Footer-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- MDB core JavaScript -->

<script src="js/popper.min.js"></script>
<script type="text/javascript" src="js/mdb.js"></script>
<script>
// Material Select Initialization
	$(document).ready(function() {
    	$('.mdb-select').material_select();
  	});
</script>

</body>

</html>