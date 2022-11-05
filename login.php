<?php 

$login = false;
$showError="";
if($_SERVER['REQUEST_METHOD'] == "POST"){
  include 'db/_dbConnect.php';
  $userid = $_POST["uid"];
  $password = $_POST["upass"];

      $sql = "SELECT * FROM users7 Where uid = '$userid' and upassword = '$password' ";
      $fireq = mysqli_query($connect, $sql);
      $num = mysqli_num_rows($fireq);

        if($num == 1){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['uid'] = $userid;
          header('location: dashboard.php');

        }
          else{
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
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>


<body>
<?php 
require 'db/_nav.php';

if($login){
    echo '<div class="alert alert-success alert-dismissible fade show"  role="alert">
      <strong>Hey '. strtoupper($userid) .', congrats you have logged in successfully!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
      }
else if($showError){
    echo '<div class="alert alert-warning alert-dismissible fade show"  role="alert">
      <strong>'. $showError .' wrong name or password!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
}
?>

    <section>
        <h2 class="top">Login Form</h2>
        <div class="loginContainer">
            <div class="imgcontainer">
                <img src="images/avatar.png" alt="Avatar" class="avatar">
            </div>
        <form action="/seProject/login.php" method="POST">
            <label for="uid"><b>University ID</b></label>
            <input type="text" placeholder="Enter University ID" id="uid" name="uid" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="upass" name="upass" required>
            <br>
            <button type="submit" class="btnLogin">Login</button>
        </form>
        </div>
    </section>
</body>

</html>