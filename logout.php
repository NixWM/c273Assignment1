<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<?php
session_start();
$message = "";
if (isset($_SESSION['username'])) {
    $message = "<div class='alert alert-success' role='alert'>Goodbye " ."<b><i>". $_SESSION['username'] . "</b></i>". ", You have been sucessfully logged out. <a href='homepage.php'><i><u><b>Back</b></i></u></a>";
    $_SESSION = array();
    session_destroy();
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
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

        <title>Logout</title>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb" style="background-color: #f4f7ff">
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item active">Logout</li>
        </ol>
        <div class="container">
            <div style="text-align: center">
                <h3>Successfully logged out!</h3>
                <br/>
                <?php
                echo $message;
                ?>
            </div>
        </div>
    </body>
</html>