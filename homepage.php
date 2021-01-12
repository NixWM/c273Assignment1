<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Yishun Community Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <style>
            .carousel-inner{
                width:100%;
                max-height: 500px;
            }
            .my-caption{
                height:40%;
            }
            .carousel-inner{
                max-height:960px;
                width:100%;
            }
            h1 {
                color: white;
                font-size: 40px;
                -webkit-text-stroke-width: 2px;
                -webkit-text-stroke-color: black;
                font-weight: bold;
                font-style: italic;
                text-align: center;
                color:#0000cc;
                font-size: 55px;
            }
            

            h5 {
                margin-top: 20px;
                 color: white;
                font-size: 40px;
                -webkit-text-stroke-width: 2px;
                -webkit-text-stroke-color: white;
                font-weight: bold;
                font-style: italic;
                text-align: center;
                color:#000;
                font-size: 30px;
            }
            p{
                 color: white;
                font-size: 40px;
                
                -webkit-text-stroke-color: white;
                font-weight: bold;
                font-style: italic;
                text-align: center;
                color:#ffffff;
                font-size: 15px;
            }
            body{
                text-align: center;
                background-color: #f4f4f4;

            }
            .alignCenter{
                text-align: justify;
                width: 80%;
                margin: auto;
            }
            .carousel-control-next,
            .carousel-control-prev /*, .carousel-indicators */ {
                filter: invert(100%);
            }


        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h1>Yishun Community Hospital</h1>
        <div style="background-color:#e7e7e7">
            <div class="container">
                <br/>


                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/sliders/slider0.png" alt="" width="900" height="500" style="border: 5px solid darkblue;">

                        </div>

                        <div class="carousel-item">
                            <img src="images/sliders/slider3.jpg" alt="" width="900" height="500" style="border: 5px solid darkblue;">

                        </div>
                        <div class="carousel-item">
                            <img src="images/sliders/slider2.jpg" alt="" width="900" height="500" style="border: 5px solid darkblue;">
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>

                </div>
                <br/>
            </div>
        </div>

        <div style="background-color:#f4f4f4">
        <div class="container">
            <br/>
            <div style="border: 5px solid white; background-color:#3e3ec6; color:white; width: 85%; margin:auto">
                
                <h5>About</h5>

                <div class="col-md-auto">
                    <div class="col-md-12 col-sm-12" style="align-self: center;">
                        <p class="alignCenter">Yishun Community Hospital is one of Singapore's largest community hospitals to provide intermediate care for recuperating patients who do not require the intensive services of an acute-care hospital. Situated beside Khoo Teck Puat Hospital, the two hospitals bring about an integrated care experience for patients, through a network of healthcare teams, information flow and treatment plans.
                        </p>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>