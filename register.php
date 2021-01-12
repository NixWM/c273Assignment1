<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>YCH - Register</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <style>
            form .error {
                color: #ff0000;
            }
            /* CSS for form border */
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
                $("#dob").datepicker({maxDate: "+0D", dateFormat: 'dd/mm/yy'});
                $("form").validate({
                    rules: {
                        username: {
                            required: true,
                            //pattern: /^[a-zA-Z]{2,}$/ // At least 2 characters or more
                            //pattern: /^[a-zA-Z]|(_.){2,}$/
                            pattern: /^[A-Za-z0-9_]{3,20}$/
                        },
                        password: {
                            required: true,
                            pattern: /^([a-zA-Z0-9@*_!$#]{8,20})$/

                        },
                        dob: {
                            required: true,
                        },
                        height: {
                            required: true,

                        },
                        weight: {
                            required: true,

                        }
                    },
                    messages: {
                        username: {
                            required: "Please enter your name.",
                            pattern: "Username must contain at least 3 characters and no more than 20 characters."

                        },
                        password: {
                            required: "Please enter your password."
                        },
                        dob: {
                            required: "Please enter your date of birth."
                        },
                        height: {
                            required: "Please enter your height."
                        },
                        weight: {
                            required: "Please enter your weight.",

                        }

                    },
                    submitHandler: function () {
                        return true;
                    }
                });

            });
        </script>

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
            <p style="text-align: center">
             <i class="fa fa-user-plus circle fa-4x" style="color: darkblue"></i>
            </p>
            <h3>Registration</h3>
            <br/>
            <form name="myForm" method="post" action="doRegister.php" class="form-vertical fBorder">

                <div class="form-group">
                    <!--Icon for user -->
                    <i class="fa fa-user"></i>
                    <label for="username">Username: </label>
                    <input type="text" class="form-control" name="username" required autofocus>
                </div>
                <div class="form-group">
                    <!--Icon for password -->
                    <i class="fa fa-lock"></i>
                    <label for="password">Password: </label>
                    <input name="password" type="password" id="password" class="form-control"/>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </small>
                </div>
                <div class="form-group">
                    <!--Icon for date -->
                    <i class="fa fa-calendar"></i>
                    <label for="dob">Date of Birth:</label>    
                    <input id="dob" type="text" class="form-control" name="dob">    
                </div>

                <hr />
                <div class="row">
                    <div class="col">
                        <!--Icon for weight -->
                    <i class="fa fa-weight"></i>
                        <label for="weight">Weight (kg):</label> 
                        <input type="number" min="0" name="weight" class="form-control" >
                    </div>
                    <div class="col">
                        <!--Icon for height -->
                    <i class="fa fa-ruler-vertical"></i>
                        <label for="height">Height (m):</label> 
                        <input type="number" min="0" name="height" class="form-control" >
                    </div>  
                </div>
                <br/>
                <div class ="form-group">
                     <!--Icon for active -->
                    <i class="fa fa-running"></i>
                    <label for="active_level">Active Level:</label>
                    <select name="activelevel" id="activelevel" class="form-control">
                        <option value="sedentary" selected>Sedentary</option>
                        <option value="moderate">Moderate</option>
                        <option value="active">Active</option>
                    </select>
                </div>
                <input value="Register" type="submit" class="btn btn-info btn-block">
                <input value="Reset" type="reset" class="btn btn-default btn-block">
            </form>
        </div>
    </body>
</html>
