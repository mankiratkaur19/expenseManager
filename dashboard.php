<?php

session_start();

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
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */

    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

    .row.content {
        height: 620px;
    }

    /* Set gray background color and 100% height */

    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }

    /* Set black background color, white text and some padding */

    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */

    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }

        .row.content {
            height: auto;
        }
    }

    .navbar {
        margin: 10px 0;
    }

    .navbar-default {
        background-color: #fff;
        border-color: #fff;
    }

    .brand-name {
        font-family: 'Josefin Slab', serif;
        font-size: 47px;
        font-weight: bold;
        color: #444;
        text-decoration: none;
    }

    .nav-container {
        padding-top: 8px;
    }

    .navbar-custom {
        font-size: 20px;
        background-color: #FFF;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2 class="navbar-brand brand-name">
                    Expense Manager
                </h2>
            </div>
            <div class="navbar-custom" id="myNavbar">
            <ul class="nav navbar-nav  nav nav-tabs">
                             
                    <li><a href="income1.php"> Add Income</a></li>
                    <li><a href="expense1.php">Add Expense</a></li>
                    <li><a href="income2.php">View Income</a></li>
                    <li><a href="expense2.php">View Expense</a></li>
                    <li><a href="report.php">View Report</a></li>
                </ul>

            

                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li class="text-center">
                                <img src="find_user.png" class="user-image img-responsive">
                            </li>

                        </ul>
                        <!--   </ul>-->

                    </div>

                </nav>
            </div>
            <div class="col-sm-8 text-left">
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
            <div class="col-sm-2 sidenav" >
                <div class="well">
                    <p>
                        <img src="img1.jpg">
                    </p>
                </div>
               
            </div>
        </div>
    </div>

    <footer style="size: 10vh;" class="container-fluid text-center">
        <p>THANK YOU FOR VISITING THE SITE!! </p>
    </footer>

</body>

</html>