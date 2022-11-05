<?php
$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $loggedin = true;
}
echo'<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/seProject"><h2>CMS</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./dashboard.php"><b>Home</b></a>
        </li>';
        if(!$loggedin) echo'
        <li class="nav-item">
          <a class="nav-link" href="./login.php"><b>Login</b></a>
        </li>
 <li class="nav-item">
          <a class="nav-link" href="./signup.php"><b>Sign-up</b></a>
        </li>';
        if($loggedin) echo'
                <li class="nav-item">
          <a class="nav-link" href="./logout.php"><b>Log-out</b></a>
        </li>';

      echo '</ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';

?>