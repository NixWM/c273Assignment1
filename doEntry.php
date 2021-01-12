<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<?php
session_start();
include "dbFunctions.php";
$msg = "";
$exercise_type = $_POST['exercise_type'];
$slider_value = $_POST['slider_value'];


$queryInsert = "INSERT INTO entry (exercise_type, duration) VALUES ('$exercise_type',$slider_value)";
$result = mysqli_query($link, $queryInsert) or die(mysqli_error($link));


$message = "<div class='alert alert-success' role='alert'>You have successfully recorded your entry. Click on <a href='homepage.php'><b><i><u>Continue</u></b></i></a> to proceed.</div>";

mysqli_close($link);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercise Entry</title>
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
                color:#003eff;
            }
        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>

        <ol class="breadcrumb" style="background-color: #f4f7ff">
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item active">Exercise Entry</li>
        </ol>

        <div class="container">
            <h3>Recorded Successfully!</h3>
            <br/>
            <div style ="text-align: center;">
                <?php
                echo $message;
                ?>
            </div>
        </div>
    </body>
</html>

