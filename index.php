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
            <div class="col-sm-2 sidenav" style="background-color: lightgoldenrodyellow;">
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse" style="background-color: lightskyblue;"> 
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
                <h1 style="color: green; size:30px; background-color: lightyellow;"> Welcome to Daily Expense Manager</h1> <br>
                <p style="font-family: oxygen;">The  purpose of Expense Manager is to automate the existing manual system by the help of computerised website. In today’s busy and expensive life we are in a great rush to make money. Daily Expense Manager aims to help everyone who are planning to know their expenses and save from it. <br>
                This is a website which users can execute in their mobile phones and update their daily expenses so that they are well known to their expenses. Here user can define their own categories for expense type like food, clothing, rent and bills where they have to enter the money that has been spent and also can add some information in additional information to specify the expense. User can also define expense categories. User will be able to see report of expense. Although this website is focused on new job holders, interns and teenagers, everyone who wants to track their expense can use this website.
Every day Expense Manager System is intended to monitor Income-Expense of a person on an everyday premise. This System separates the Income-based daily expenses. On the off chance that you surpass day’s cost, the system will cut it from your salary and will give new everyday cost permitted sum. It will give you a chance to include the reserve funds sum, which you had put something aside for some specific Festivals or days like Birthday or Anniversary.
</p>
                <br>
                <h3 style="color:#339933; size:24px"> Features </h3>
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
            <div class="col-sm-3 sidenav" style="background-color: lightyellow;">
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