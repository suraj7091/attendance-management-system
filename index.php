<?php

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
            padding-top: 5rem;
            padding-bottom: 1rem;
        }
		
		.avatar-pic {
  			width: 150px;
		}             
    </style>
</head>

<body>

<main>
    <div class="container">
        <div class="row">
			<div class="col-md-2"></div>
            <div class="col-md-8 mb-r">
				<div class="card">
					<div class="card-body">
						<!--Header-->
						<div class="text-center">
                			<h3 class="pink-text mb-5"><strong>Register</strong></h3>
						</div>
						<!--form-->
						<form name="reg" id="register" action="code_exec.php" onSubmit="return validateForm()" method="post" enctype="multipart/form-data">
							
							<div class="row">
								<div class="col-md-5"></div>
								<div class="file-field">
									<div class="mb-4">
										<img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle z-depth-1-half avatar-pic">
									</div>
									<div class="d-flex justify-content-center">
										<div class="btn btn-mdb-color btn-rounded">
											<span>Add photo</span>
											<input type="file" class="fileinput" name="userfile" id="fileinput">
										</div>
									</div>
								</div>	
							</div>		
							
							<div class="row">
								<div class="col-md-6">
									<div class="md-form">                     
										<input id="fname" class="form-control" type="text" name="fname" required>
										<label for="fname">First Name</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="md-form">                     
										<input id="lname" class="form-control" type="text" name="lname" required>
										<label for="lname">Last Name</label>
									</div>
								</div>
							</div><!--form row-->					
							
							<div class="md-form">                     
								<input id="roll" class="form-control" type="text" name="roll_no" type="number" required>
								<label for="roll">Enrollment #</label>
							</div>
							
							<div class="row">
								<div class="col-md-4">
									<div class="md-form">                     
										<input id="college" class="form-control" type="text" name="college" required>
										<label for="college">University School</label>
									</div>
								</div>						
								<div class="col-md-4">
									<div class="md-form">
										<select name="stream" id ="stream" class="mdb-select">
											<option value="" disabled selected>Stream</option>
											<option value="cse">CSE</option>
											<option value="ece">ECE</option>
											<option value="it">IT</option>
										</select>
										<!--label>Stream</label-->
									</div>						
								</div>
								<div class="col-md-4">
									<select name="semester" id="semester" class="mdb-select">
										<option value="" disabled selected>Semester</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>
									<!--label>Semester</label-->
								</div>					
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="md-form">                     
										<input id="password" class="form-control" type="password" name="password" required>
										<label for="password">Password</label>
										<small class="text-muted">
											Must be 8-20 characters long.
										</small>
									</div>
								</div>
								<div class="col-md-6">
									<div class="md-form">                     
										<input id="confirm" class="form-control" type="password" name="confirm" required>
										<label for="confirm">Confirm Password</label>
									</div>
								</div>					
							</div><!--row-->
														
							<div class="text-center">
								<button type="submit" name="submit" class="btn btn-default waves-effect waves-light" onclick="toastr.info('Hi! I am info message.');">Submit</button>									
								<a href="login.php" class="btn btn-deep-orange waves-effect waves-light">Login</a>
							</div>							
														
							<div class="text-center">
								<div id="status"></div>
							</div>

						</form>
					</div><!--card-body-->
				</div><!--card-->
            </div><!--col-md-8-->
        </div><!--row-->
    </div>
</main>

<!--Footer-->
<!--/.Footer-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
</script>

<script>
	//Material select
	$(document).ready(function() {
    	$('.mdb-select').material_select();
  	});
</script>

<script>
	function validateForm() {	
		var confirm = $('#confirm').value;
		var password = $('#password').value;
		if (password!=confirm){
			alert("password not matched");
  			return false;
		}
					
		document.getElementById('status').innerHTML = "Sending...";
		document.getElementById('register').submit();
	}
</script>

</body>
</html>
