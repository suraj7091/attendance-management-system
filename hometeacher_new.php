<?php
session_start();
// if(!isset($_SESSION['SESS_FIRST_NAME']) || (trim($_SESSION['SESS_LAST_NAME']) == '')) {
// 		header("location:login.php");
//		exit();}
?>
<!DOCTYPE html>
<html class="full-height" lang="en"><head>
<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Material Design Bootstrap Template</title>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/compile.min.css" rel="stylesheet">

<style>

    .intro-2 {
        background: url('http://edusources.in/educampus/img/USICT.jpg') no-repeat center center;
        background-size: cover;
    }
        
    .navbar {
        background-color: transparent;
    }
    
    .top-nav-collapse {
        background-color: #4285F4;
    }
    
    @media only screen and (max-width: 768px) {
        .navbar {
            background-color: #4285F4;
        }
    }
    
</style>
<style></style></head>

<body>

<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar">
        <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link waves-effect waves-light" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">View Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">Feed Attendence</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">View Class Report</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="view intro-2 " style="">
        <div class="full-bg-img flex-center">
            <div class="container text-center white-text wow fadeInUp" style="animation-name: none; visibility: visible;">
                <h2>WELCOME TO ATTENDENCE MANAGEMENT SYSTEM</h2>
                <br/>
                <p>This portal is based on attendence management system .it  is used for taking attendence digitally and publishing
                <br/>
                student record to web so that it is available to all .</p>          
                <p>Such that it is available to parents so that they can see what their ward are doing during class time. it also helps student in knowing their records for time</p>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Meet The Team</h2>
            </div>
        </div>
    </div>

</main>
<!--Main Layout-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
</script>


<script>
    wow = new WOW().init();
</script>

<div class="hiddendiv common"></div></body></html>