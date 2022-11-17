<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
include 'db/_dbConnect.php';
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
    <!-- Navigation starts here -->
    <?php
    require 'db/_nav.php';
    ?>
    <!-- Navigation ends here -->



    <!-- Clubs general message ends here -->

    <!-- SLIDER starts here -->
    <div id=" carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1280x360/?tech,computer" class="d-block w-100" alt="tech image">
            </div>
        </div>
    </div>
    <!-- SLIDER ends here -->


    <!-- Events starts here -->
    <div class="container my-4" id="event">
        <h2 class="text-center">Browse Through the this club Events...</h2>
        <div class="row">
            <!-- fetch all events -->

            <?php
            $sql = "SELECT * FROM `event`";
            $fireq = mysqli_query($connect, $sql);
            //Using a loop here to iterate through clubs 
            $row = mysqli_fetch_assoc($fireq);
            if (!($row == null)) {
                while (mysqli_fetch_assoc($fireq))
                    echo '<div class="col-md-4">
                            <div class="card my-2" style="width: 18rem;">
                                <!-- https://source.unsplash.com/360x360/?nature,water -->
                                <img src="https://source.unsplash.com/720x480/?club,' . $row['evname'] . '" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['evname'] . '</h5>
                                    <p class="card-text" maxlength="30">' . substr($row['evdetails'], 0, 40) . '...</p>
                                    <a href="#" class="btn btn-success">Join the event</a> 
                                </div>
                            </div>
                        </div>
                        ';
            }
            //event creation request message starts here 
            else if ($row == NULL)
                echo '<div class="container-fluid" style="margin:0px ; padding:0px;">
                <div class="alert alert-warning" role="alert" ">
            <h4 class=" alert-heading">Opps! no event ongoing!</h4>
                    <p>
                    <h1>Hey user, request admin to start an event soon !</h1>
                    </p>
                </div>
            </div>';
            // <!-- event creation request message ends here -->
            ?>
        </div>

    </div>
    <!-- events ends here -->

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