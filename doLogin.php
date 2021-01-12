<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<?php
session_start();
include("dbFunctions.php");
$msg = "";


if (isset($_POST['username'])) {
    //retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //match the username and password entered with database record
    $query = "SELECT * FROM users WHERE username='$username' AND password ='$password'";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //if record is found, store id and username into session
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $msg = "<div class='alert alert-success' role='alert'>You have logged in successfully. Click on <a href='homepage.php'><b><i><u>Continue</u></b></i></a> to proceed.</div>";
    } else {
        $msg = "<div class='alert alert-danger' role='alert'>Sorry, you must enter a valid username and password to log in. <a href='login.php'>Try again</a></div>";
    }
}
?>
<html>
    <head>
        <title>Login</title>
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
            <li class="breadcrumb-item active">Login</li>
        </ol>
        <div class="container">
            <h3>Login Message</h3>
            <br/>
            <div style="text-align: center">
                <?php
                echo $msg;
                ?>
            </div>
        </div>
    </body>
</html>