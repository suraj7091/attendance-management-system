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
    <link href="css/main.css" rel="stylesheet">
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