<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
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
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/64cc2e590f.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    require 'db/_nav.php';
    ?>

    <div class="container-fluid my-2">
        <div class="alert alert-success  fluid" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>
            <h1>Hey! Welcome to the CMS dashboard</h1>
            </p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to <a href="logout.php"> log-out using this link</a>.</p>
        </div>
    </div>

    <!-- SLIDER starts here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1280x360/?computer,club" class="d-block w-100" alt="tech image">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1280x360/?technology,coding" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1280x360/?tech,apple." class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <!-- Category container starts here -->
    <div class="container my-4">
        <h2 class="text-center">techTalk - browse categories!</h2>

        <div class="row">
            <!-- //Using a for loop to iterate through categories -->
            <!-- fetch all categories -->
            <?php
            $sql = "SELECT * FROM `categories`";
            $fireq = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($fireq)) {
                echo '<div class="col-md-4">
                            <div class="card my-2" style="width: 18rem;">
                                <!-- https://source.unsplash.com/360x360/?nature,water -->
                                <img src="https://source.unsplash.com/720x480/?code,' . $row['category_name'] . '" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['category_name'] . '</h5>
                                    <p class="card-text" maxlength="30">' . substr($row['category_description'], 0, 40) . '...</p>
                                    <a href="#" class="btn btn-success">Explore the threads</a>
                                </div>
                            </div>
                        </div>
                        ';
            }
            ?>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

<?php
include 'db/_footer.php';
?>

</html>