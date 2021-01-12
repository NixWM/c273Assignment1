<!--Name: Heng Wei Ming-->
<!--Student ID: 16046530-->


<!-- I wanted to put every css into a css file but, I used all the same class,id, elements for the texts, so I decided not to. -->
<style>
    h2{
        color: white;
        font-size: 40px;
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: black;
        font-weight: bold;
        font-style: italic;
        text-align: center;
        color:#63a1cf;
        font-size: 20px;
        margin-top: 5px;
    }
    #textStyle{
        font-size: 20px; 
        font-style: italic;
        color: white;
        -webkit-text-stroke-color: white;
        font-weight: bold;
        font-style: italic;
        text-align: center;
        color:#000;
    }

</style>

<!-- Navbar color -->
<nav class="navbar navbar-expand-md navbar-dark  " style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="homepage.php"><img src="images/ychlogo.png" width="250" height="70" alt=""/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true" style="color:black; padding:5px;"></i></span>
    </button>

    <!-- Navbar drop down -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav ml-auto ">   

            <li class="nav-item"> 
                <a class="nav-link" id="textStyle" href="homepage.php">Home</a>
            </li>

            <li class="nav-item dropdown px-5 ">
                <a class=" btn btn-prim nav-link dropdown-toggle fade-down" id="textStyle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <i><b>Menu</b></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <?php if ($_SESSION['role'] == "member") { ?>  
                            <a class="dropdown-item " style="color: #000; font-size: 15px; font-style: italic;" href="entry.php">Exercise Entry</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" style="color: #000; font-size: 15px; font-style: italic;" href="logout.php"><b>Logout</b></a>
                        <?php } ?>
                    </div>       
                <?php } else { ?>
                    <a class="dropdown-item" style="color: #000; font-size: 15px; font-style: italic;" href="login.php">Login</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color: #000; font-size: 15px; font-style: italic;" href="register.php"><b>Register</b></a>
                </li> 
            <?php } ?>

        </ul>

        <!-- Show username if logged in -->
        <?php
        if (isset($_SESSION['user_id'])) {
            ?>
            <div class='text-dark'><i><?php echo "<h2><i class='fa fa-user'></i> " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")</h2>" ?></i></div>
            &nbsp;&nbsp;
        <?php } else { ?>
            <div class='text-dark'><i><?php echo "<h2>Hello, visitor!</h2>" ?></i></div>

        <?php }
        ?>
    </div>
</nav>
