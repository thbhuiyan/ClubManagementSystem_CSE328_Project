<?php

$login = false;
$showError = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'db/_dbConnect.php';
    $userid = $_POST["uid"];
    $password = $_POST["upass"];

    // $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

    $sql = "SELECT * FROM users7 Where uid = '$userid' ";
    $fireq = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($fireq);

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($fireq)) {
            if (password_verify($password, $row['upassword'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['uid'] = $userid;
                header('location: dashboard.php');
            }
        }
    } else {
        $showError = "Login credentials invalid!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <?php
    require 'db/_nav.php';
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    ?>

    <section id="loginPage">
        <!-- <h2 class="top">Login Form</h2> -->
        <form action="login.php" method="POST">
            <div class="loginContainer">
                <label class="noAccount">
                    Don't have an account? <a href="signup.php">Signup</a>
                </label>
                <div class="imgcontainer">
                    <img src="images/avatar.webp" alt="Avatar" class="avatar">
                </div>
                <label for="uname"><b>University ID</b></label>
                <input type="text" placeholder="Enter University ID" name="uid" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="upass" required>
                <a href="dashboard.php"><button type="submit" class="btnLogin">Login</button></a>
                <br>
                <label>
                    <input type="checkbox" checked="checked"> Remember me
                </label>
            </div>
        </form>
    </section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>