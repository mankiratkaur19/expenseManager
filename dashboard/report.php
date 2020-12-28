<?php
    session_start();
    $name = $_SESSION['name'];
    $num = $_SESSION['num'];
    $filename = "report";
    $tablename = $name."-".$num;
    include("../include/connection.php");
    $query_expense = mysqli_query($conn,"SELECT `Source`,`Amount` FROM `$tablename` WHERE `Category` = 'Expense'");
    $query_income = mysqli_query($conn,"SELECT `Source`,`Amount` FROM `$tablename` WHERE `Category` = 'Income'");
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
    <link rel="stylesheet" href="../style.css">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawIncomeChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawIncomeChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Source of Income');
        data.addColumn('number', 'Amount Received');
        data.addRows([
            <?php
                while($resIn = mysqli_fetch_assoc($query_income))
                {
                    echo "['".$resIn['Source']."',".$resIn['Amount']."],"; // [sfsfAa , sasfqeg]
                }    
            ?>
        ]);

        // Set chart options
        var options = {'title':'Income Transactions - Pie View',
                       'width':500,
                       'is3D':true,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_income_div'));
        chart.draw(data, options);
      }
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Expense Description');
        data.addColumn('number', 'Amount Spent');
        data.addRows([
            <?php
                while($resEx = mysqli_fetch_assoc($query_expense))
                {
                    echo "['".$resEx['Source']."',".$resEx['Amount']."],";
                }    
            ?>
        ]);

        // Set chart options
        var options = {'title':'Expenses - Pie View',
                       'width':500,
                       'is3D':true,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_expense_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
  <?php include("../include/header.php") ?>
    <div class="text-center" style="height: 75vh; display: flex; width: 100vw;">
        <div class="content" style="height: inherit;">
            <?php include('../include/sidenav.php');?>

            <div class="" style="background-color: lightgrey; width: 75vw; height: inherit; display: flex;">
                <div id="chart_income_div" style="margin: auto; width: calc(0.50 * 75vw)"></div>
                <div id="chart_expense_div" style="margin: auto; width: calc(0.50 * 75vw)"></div>
            </div>
        </div>
    </div>

    <?php include("../include/footer.php") ?>
  </body>
</html>