<?php
$loggedin = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $loggedin = true;
}
echo '<div class="navBar">';

if (!$loggedin) echo '
        <a href="index.php"><img src="images/cms.png" class="navIMG"></a>
        <a href="signup.php" class="navLinks"><i class="fa fa-fw fa-user"></i> Signup</a>
        <a href="login.php" class="navLinks"><i class="fa fa-fw fa-user"></i> Login</a>
        <a href="./contact.php" class="navLinks"><i class="fa fa-fw fa-envelope"></i>
        Contact Devs</a>';

if ($loggedin) echo '
        <a href="dashboard.php"><img src="images/cms.png" style="width:125px; margin-left: 10px;"></a>
        <a href="#club" class="navLinks"><i class="fa fa-fw fa-home"></i> Club</a>
        <a href="#event" class="navLinks"><i class="fa fa-fw fa-home"></i> Event</a>
        <a href="index.php" class="navLinks"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="./contact.php" class="navLinks"><i class="fa fa-fw fa-envelope"></i>
        Contact Devs</a>
        <a href="./logout.php" class="navLinks"><i class="fa fa-fw fa-user"></i> Log-out</a>';
echo '</div>';