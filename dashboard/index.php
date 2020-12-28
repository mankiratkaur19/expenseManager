<?php
    session_start();
    $name = $_SESSION['name'];
    $num = $_SESSION['num'];
    $tablename = $name."-".$num;
    $filename = "index";
    include("../include/connection.php");
    $query = mysqli_query($conn,"SELECT * FROM `$tablename`");
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
</head>

<body>

    <?php include("../include/header.php") ?>
    <div class="text-center" style="height: 75vh; display: flex; width: 100vw;">
        <div class="content" style="height: inherit;">
            <?php include('../include/sidenav.php');?>

            <div class="" style="background-color: lightgrey; width: 75vw; height: inherit;">
                <div class="username">
                    Hello <?php echo $name?>
                </div>
                <?php
                    if(mysqli_num_rows($query) == 0)
                    {
                ?> 
                    <div class="noTrans">
                          <div class="arrowImage"><img src="../images/arrow.png" alt=""></div>
                          <div class="arrowMsg">Add your Income or Expense Transactions from here</div>
                    </div>
                <?php
                    }
                    else
                    {
                ?>
                    <div class="table">
                        <div class="transTable">
                            <table>
                                <tr>
                                    <th>
                                        Trans. Id
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    <th>
                                        Source of Income
                                    </th>
                                    <th>
                                        Mode of Payment
                                    </th>
                                    <th>
                                        Amount
                                    </th>
                                </tr>
                                <?php
                                    $i = 0;
                                    while($result = mysqli_fetch_assoc($query)){
                                        echo "<tr><td>".++$i."</td><td>".$result['Category']."</td><td>".$result['Source']."</td><td>".$result['Mode']."</td><td>".$result['Amount']."</td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <?php include('../include/footer.php');?>

</body>

</html>