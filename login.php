<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<!DOCTYPE html>
<html>
    <head>
        <title>Yishun Community Hospital</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            .fBorder
            {
                border: 1px solid #cecece;
                padding: 30px;
                background-color: #dce4fb;

            }
            form {
                width: 75%;
                 display: inline-block;
                 text-align: left;
                
            }
            body{
                text-align: center;     
                align-self: center;
                align-items: center;
            }
             h3{
                color: white;
                font-size: 40px;
                -webkit-text-stroke-width: 2px;
                -webkit-text-stroke-color: black;
                font-weight: bold;
                font-style: italic;
                text-align: center;
                color:#0000cc;
                font-size: 35px;
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
            <p style="text-align: center">
             <i class="fa fa-user-circle fa-7x" style="color: darkblue"></i>
            </p>
            <h3>Login</h3>
            <br/>
            <form method="post" action="doLogin.php" class="fBorder">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>

                <input type="submit" value="Login" class="btn btn-primary btn-block"/>
            </form>
        </div>
             
    </body>
</html>
