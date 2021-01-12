<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<?php
include "dbFunctions.php";
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$activelevel = $_POST['activelevel'];


$queryCheck = "SELECT * FROM users 
                    WHERE username='$username'";
$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));


if ($username == "" or $password == "" or $dob == ""
        or $height == "" or $weight == "") {
    //a server side check to make sure there is no empty form field
    //since client side check can be bypassed
    $message = "There was an empty field, please refill the form";
} else {
    $queryCheck = "SELECT * FROM users 
                    WHERE username='$username'";
    $resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

    if (mysqli_num_rows($resultCheck) == 1) {
        $message = "<div class='alert alert-danger' role='alert'>Username already exists. Please try to <a href='register.php'>register</a> again.";
    } else {

        $queryInsert = "INSERT INTO users 
                        (username,password,dob,height,weight,active_level,role) VALUES ('$username','$password',STR_TO_DATE('$dob', '%d/%m/%Y'),'$height','$weight','$activelevel','member')";
        $resultInsert = mysqli_query($link, $queryInsert) or die;
        $message = "<div class='alert alert-success' role='alert'>Welcome " . "<b><i>".strtolower($username)."</i></b>" .
                ", you has been registered as member. You can now <a href='login.php'><i><u><b>login.</b></i></u></a>";
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <style>
            h3{
                color: white;
                font-size: 40px;
                -webkit-text-stroke-width: 2px;
                -webkit-text-stroke-color: black;
                font-weight: bold;
                font-style: italic;
                text-align: center;
                color:#7175ea;
            }
        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb" style="background-color: #f4f7ff">
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item active">Register</li>
        </ol>

        <div class="container">
            <h3>Registration Message</h3>
            <br/>
            <div style="text-align: center">
                <?php
                echo $message;
                ?>
            </div>
        </div>
    </body>
</html>

