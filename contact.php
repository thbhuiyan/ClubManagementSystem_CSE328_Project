<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us!</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/64cc2e590f.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
	require 'db/_nav.php';
	?>
    <div class="container-fluid my-1">
        <div class="alert alert-success " role="alert">
            <h2 class="alert-heading">Developers' info</h2>
            <hr>
            <h3>Need any help?</h3>
            <h5>Please, feel free to contact us with any issue or comment!</h5>
            <ul>
                <li><a href="mailto:afsanarinki2020@gmail.com" style="text-decoration: none;">
                        <h4>Khandakar Tasfia Reza
                            -
                            286</h4>
                    </a>
                </li>
                <li><a href="mailto:afsanarinki2020@gmail.com" style="text-decoration: none;">
                        <h4>Afsana Akhter -
                            295</h4>
                    </a>
                </li>
                <li><a href="mailto:afsanarinki2020@gmail.com" style="text-decoration: none;">
                        <h4>Tanbir Hasan Bhuiyan -
                            294</h4>
                    </a>
                </li>
                <li><a href="mailto:afsanarinki2020@gmail.com" style="text-decoration: none;">
                        <h4>Md Imran Nazir -
                            248</h4>
                    </a>
                </li>

            </ul>
            <hr>

            <p class="mb-0">Whenever you need to, be sure to <a href="logout.php"> log-out using this link</a>.</p>
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