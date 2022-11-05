<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/64cc2e590f.js" crossorigin="anonymous"></script>
  </head>

<body>

<?php
require 'db/_nav.php';
?>
<div class="container my-2">
      <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Well done!</h4>
      <p><h1>Hey <?php echo strtoupper($_SESSION['uid']); ?>, welcome to the CMS dashboard</h1></p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to <a href="/loginSystemPHP/logout.php"> log-out using this link</a>.</p>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>