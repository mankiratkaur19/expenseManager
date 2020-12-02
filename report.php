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
            height: 450px
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

        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
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
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav nav nav-tabs">
                    <li class="active">
                        <a href="home.php"></a>
                    </li>
                    <li><a href="income1.php"> Add Income</a></li>
                    <li><a href="expense1.php">Add Expense</a></li>
                    <li><a href="income2.php">View Income</a></li>
                    <li><a href="expense2.php">View Expense</a></li>
                    <li><a href="report.php">View Report</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <img src="find_user.png"> </div>

            <div class="col-sm-8 text-left">
                <h1>Welcome to Daily Expense Manager</h1>

                <hr>
                <h3>VIEW REPORT </h3>
                <p>
                    <section>
                        <h6>Hello User!!</h6>
                        <!-- TABLE CONSTRUCTION-->
                        <table>
                            <tr>
                                <th>Source of Income </th>
                                <th>Amount</th>
                                <th>Expense Description </th>
                                <th>Amount</th>

                            </tr>
                            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                            <?php   // LOOP TILL END OF DATA  

                            $servername = "localhost";
                            $username = "username";
                           
                            $dbname = "expense manager";
                            $conn = mysqli_connect('localhost', 'root', ' ');
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            echo "Connected successfully";

                            mysqli_select_db("expense manager", $conn);

                            $result = mysqli_query("SELECT * FROM income && expense");


                            while ($rows = $result->fetch_assoc()) {
                            ?>
                                <tr>
                                    <!--FETCHING DATA FROM EACH  
                                    ROW OF EVERY COLUMN-->
                                    <td>
                                        <?php echo $rows['income']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['iamount']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['expense']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['eamount']; ?>
                                    </td>


                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </section>
                </p>
            </div>
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>
                        <img src="img1.jpg">
                    </p>
                </div>
                <div class="well">

                    <h5>Features</h5>
                    <p>1. Helps to keep track of your savings.</p>

                    <p>2. Easy to maintain records.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

</body>

</html>