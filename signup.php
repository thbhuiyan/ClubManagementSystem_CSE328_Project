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
    <link rel="stylesheet" href="style.css">
        <title>Sign UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<?php 
require 'db/_nav.php';
if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show"  role="alert">
          <strong>Your account has been created!</strong> You can log in now.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> ';
            }
else if($showError){
        echo '<div class="alert alert-warning alert-dismissible fade show"  role="alert">
          <strong>'. $showError .'</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> ';
}
?>

    <section id="signUpPage">

        <div class="loginContainer">

            <form action="signup.php" method="POST">
                <label class="noAccount haveAccount">
                    Already have an account? <a href="login.php">Login</a>
                </label>
                <div class="imgcontainer">
                    <img src="images/avatar.webp" alt="Avatar" class="avatar">
                </div>
                <select name="club">
                    <option>Select Club</option>
                    <option value="IT">IT Club</option>
                    <option value="Sports">Sports Club</option>
                    <option value="Cultural">Cultural Club</option>
                </select>

                <input type="text" placeholder="Enter Full Name" required name="fullName">
                <br>
                <input type="text" placeholder="Enter University ID" required name="uid">
                <select name="dept">
                    <option >Select Departement</option>
                    <option value="CSE">CSE</option>
                    <option value="LLB">LLB</option>
                    <option value="BBA">BBA</option>
                    <option value="EEE">EEE</option>
                </select>

                <input type="password" placeholder="Enter Password" required name="upass">

                <input type="password" placeholder="Enter Confirm Password" required name="cpass">
                <small class="form-text text-muted">Make sure to type the same password.</small>

                <label>
                    <input type="checkbox" checked="checked"> I accept the terms & conditions
                </label>
                  <button type="submit" class="btnLogin">Signup</button>
            </form>


        </div>
    </section>
</body>

</html>