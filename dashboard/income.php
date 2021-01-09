<?php
session_start();
$name = $_SESSION['name'];
$num = $_SESSION['num'];
$filename = "income";
$tablename = $name . "-" . $num;
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
    <script src="jquery-3.5.1.min.js"></script>
</head>

<body>

    <?php include("../include/header.php") ?>
    <div class="text-center" style="height: 75vh; display: flex; width: 100vw;">
        <div class="content" style="height: inherit;">
            <?php include('../include/sidenav.php'); ?>

            <div class="" style="background-color: lightgrey; width: 75vw; height: inherit;">
                <div class="username">
                    Hello <?php echo $name ?>
                </div>
                <div class="income form">
                    <form method="POST">
                        <div class="form-group">
                            <label for="income">Source of income:</label>
                            <select name="source" id="source" class="form-control">
                                <option value="none">--select--</option>
                                <option value="Award">Award</option>
                                <option value="Gifts">Gifts</option>
                                <option value="Interest Money">Interest Money</option>
                                <option value="Others">Others</option>
                                <option value="Salary">Salary</option>
                                <option value="Selling">Selling</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="income">Mode of Payment:</label>
                            <select name="mode" id="income" class="form-control">
                                <option value="none">--select--</option>
                                <option value="Cash">Cash</option>
                                <option value="Net Banking">Net Banking</option>
                                <option value="UPI">UPI</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount Received:</label>
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>

                        <input type="submit" class="btn btn-default" name="submit" id="submit">
                    </form>
                    <script>
                        const subBtn = document.getElementById('submit');

                        subBtn.addEventListener('click', () => {
                            if(confirm("Are you sure? "))
                            {
                                alert("Submitted");
                                <?php
                                    include('../include/connection.php');
                                    if (isset($_POST['submit'])) {


                                        $mode = $_POST['mode'];
                                        $source = $_POST['source'];
                                        $amount = $_POST['amount'];

                                        $query = "INSERT INTO `$tablename` values(NULL,'Income','$source','$mode','$amount')";
                                        $ins = mysqli_query($conn, $query);
                                    }
                                ?>
                            }
                        });
                    </script>


                </div>
            </div>
        </div>
    </div>

    <?php include("../include/footer.php") ?>
</body>

</html>