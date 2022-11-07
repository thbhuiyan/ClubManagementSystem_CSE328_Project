<?php 

$showAlert = false;
$showError = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'db/_dbConnect.php';
    $club = $_POST["club"];
    $username = $_POST["fullName"];
    $uid = $_POST["uid"];
    $dept = $_POST["dept"];
    $password = $_POST["upass"];
    $cpassword = $_POST["cpass"];

//check whether the user id exist or not?
$existSql = "SELECT * FROM users7 where uid = '$uid'";
$fireq = mysqli_query($connect, $existSql);

$numExistRows = mysqli_num_rows($fireq);
        if($numExistRows > 0){
                $showError = "User ID already exists, try loggin in!";
                 header("location:login.php");
            }

        else if($password == $cpassword){
            $hashingPass = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users7` (`uclub`,`username`, `uid`,`udept`,`upassword`, `date`) VALUES ('$club','$username','$uid', '$dept', '$hashingPass', current_timestamp())";

                    $fireq = mysqli_query($connect, $sql);
                        if($fireq){
                            $showAlert = true;
                            header("location:login.php");
                        }
                }
        else $showError = "Password doesn't match, try again carefully!";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>

<body>

<?php
    require 'db/_nav.php';
    if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Account successfully created.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
?>



    



    <section id="signUpPage">
        <!-- SignUP Form -->

        <div class="loginContainer signupConatiner">
            <form action="signup.php" method="POST">
                <label class="noAccount haveAccount">
                    Already have an account? <a href="login.php">Login</a>
                </label>
                <div class="imgcontainer">
                    <img src="images/avatar.webp" alt="Avatar" class="avatar">
                </div>

                <select name="club">
                    <option value="">Select Club</option>
                    <option value="IT Club">IT Club</option>
                    <option value="Sports Club">Sports Club</option>
                    <option value="Cultural Club">Cultural Club</option>
                </select>
                <!-- <label for="fname"><b> Full Name</b></label> -->
                <input type="text" placeholder="Enter Full Name" required name="fullName">
                <br>
                <input type="email" placeholder="Enter Email" required name="userEmail">
                <br>
                <!-- <label for="uname"><b>University ID</b></label> -->
                <input type="text" placeholder="Enter University ID" required name="universityID">
                <select name="universityDept">
                    <option value="">Select Departement</option>
                    <option value="CSE">CSE</option>
                    <option value="LLB">LLB</option>
                    <option value="BBA">BBA</option>
                    <option value="EEE">EEE</option>
                </select>
                <label for="gender"><b>Gender:</b></label>
    
                <input type="radio" id="Male" name="gender" value="male">
                <label for="Male">Male</label>
    
                <input type="radio" id="Female" name="gender" value="female">
                <label for="Female">Female</label>
    
    
                <!-- <label for="psw"><b>Password</b></label> -->
                <input type="password" placeholder="Enter Password" required name="password">
                <input type="password" placeholder="Re-enter Password" required name="cpassword">
                <br>
                <label>
                    <input type="checkbox" checked="checked"> I accept the terms & conditions
                </label>
                <a href="login.php"><button type="submit" class="btnLogin">Register</button></a>
            </form>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>