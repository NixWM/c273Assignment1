<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercise Entry</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>

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
        <script>
            $(document).ready(function () {

                $("#slider").slider({
                    value: 0,
                    min: 5,
                    max: 120,
                    step: 1,
                    slide: function (event, ui) {
                        $("#num").val(ui.value);
                    }
                });

                $("#num").val($("#slider").slider("value"));

            });
        </script>
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
            <p style="text-align: center">
                <i class="fa fa-running fa-7x" style="color: darkblue"></i>
            </p>
            <h3 style="text-align: center">Exercise Entry</h3>
            <br/>
            <form method="post" action="doEntry.php" class="fBorder">
                <label for="active_level"><b>Exercise Type:</b></label>
                <div class="input-group mb-3">

                    <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fa fa-running" aria-hidden="true"></i></span>
                    </div>
                    <select name="exercise_type" id="activelevel" class="form-control">
                        <option value="walk" selected > Walk</option>
                        <option value="run">Run</option>
                        <option value="cycle">Cycle</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="duration"><b>Exercise duration: &nbsp;</b></label>
                    <label for="slider"><input type="text" id="num" name="slider_value" readonly style="border:0; color:#f6931f; font-weight:bold; text-align:center" size="1"></label>
                    <label for="id_num>"><b>&nbsp;(mins)</b></label>
                    <div id="slider"></div>
                </div>

                <input type="submit" value="Submit" class="btn btn-primary btn-block"/>
            </form>
        </div>

    </body>
</html>