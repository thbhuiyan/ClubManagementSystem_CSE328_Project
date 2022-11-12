<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Club Management System</title>
</head>

<body>
    <section id="homeContainer">
        <?php
        require 'db/_nav.php';

        ?>

        <div id="container">
            <!-- Main container Starts -->
            <div class="top">
                <!-- <h1 class="mainHeading">Welcome <br>to<br> Club Management System</h1> -->
                <div class="imgClub">
                    <img src="images/logo.png" alt="">
                </div>
            </div>
            <!-- Buttons Starts -->
            <div class="btnContainer">
                <div class="buttons">
                    <a href="login.php"><button>Login</button></a>
                </div>
                <div class="buttons">
                    <a href="signup.php"><button>Sign Up</button></a>
                </div>
                <!-- Buttons End -->
            </div>
            <!-- Main container Ends -->
        </div>

    </section>
</body>

</html>