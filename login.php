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

    <title>Attendence Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- <link href="css/mdb.css" rel="stylesheet"> -->
    <link href="css/main.css" rel="stylesheet">
    <style rel="stylesheet">
        body {
            background-image: url('http://edusources.in/educampus/img/USICT.jpg');
        } 
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
                <div class="col-md-3">
                </div>
                
                <div class="col-md-6 mb-r">    
                    <!--Form without header-->
                    <div class="card">
                        <div class="card-body">
                            <!--Header-->
                            <div class="form-header default-color text-center">
                                <h3>Login</h3>
                            </div>
                            <!--Body-->
                            <form action="login_exec.php" name="login" method="post">
                                <div class="md-form">
                                    <i class="fa fa-id-card prefix grey-text"></i>
                                    <input id="cyanForm-email" class="form-control" type="text" name="roll_no" required>
                                    <label for="cyanForm-email">Enrollment Number</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input id="cyanForm-pass" class="form-control" type="password" name="password" required>
                                    <label for="cyanForm-pass">Your password</label>
                                </div>
                                <?php                         
                                    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                                    echo "<script>alert('Enrollment no or Password do not match');</script>";
                                    unset($_SESSION['ERRMSG_ARR']);
                                    }
                                ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default waves-effect waves-light">Login</button>
                                    <a href="loginteacher.php" class="btn btn-deep-orange waves-effect waves-light">Login as Faculty</a>    
                                </div>
                            </form>                           
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options">
                                <p>Not a member? <a href="index.php">Sign Up</a></p>
                                <p>Forgot <a href="#">Password?</a></p>
                            </div>
                        </div>
                    </div><!--card-->
                    <!--/Form without header-->           
                </div><!--col-->
            </div><!--row-->
        </div>
    </main>

    <!--Footer-->
    <!--/.Footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>

</body>

</html>