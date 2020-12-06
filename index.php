<?php

session_start();
$filename = "homepage";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daily Expense Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include ('./include/header.php');?>

    <div class="text-center" style="height: 75vh; display: flex; width: 100vw;">
        <div class="content" style="height: inherit;">
            <div class="col-sm-2 sidenav">
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li class="text-center">
                                <img src="./images/find_user.png" class="user-image img-responsive">
                            </li>
                        </ul>
                        <!--   </ul>-->

                    </div>

                </nav>
            </div>
            <div class="col-sm-7 text-left">
                <h1 style="color: green;"> Welcome to Daily Expense Manager</h1>
                <p>Daily Expense Tracker System is a system which will keep a track of Income-Expense of a House-Wife on
                    a day to day basics, This System takes Income from House-Wife and divides in daily expense allowed,
                    If u exceed that days expense it
                    will cut if from your income and give new daily expense allowed Amt, and if that days expense is
                    less it will add it in savings. Daily expense tracking System will generate report at the end of
                    month to show Income-Expense Curve. It
                    will let you add the savings amt which you had saved for some particular Festivals or day like
                    Birthday or Anniversary.</p>
                <br>
                <h3 style="color:blue; size:18px"> Features </h3>
                <p style="size: 10px;">
                    •	Create multiple accounts/budget <br>
                    •	Delete account<br>
                    •	Background color<br>
                    •	Modify Transactions<br>
                    •	Offline datastore<br>
                    •	Passcode security<br>
                    •	Fully customizable categories<br>

                </p>
            </div>
            <div class="col-sm-3 sidenav" >
                <div class="well">
                    <p>
                        <img src="./images/img1.jpg">
                    </p>
                </div>
               
            </div>
        </div>
    </div>
    <?php include('./include/footer.php');?>

</body>

</html>