<?php
    session_start();
    $name = $_SESSION['name'];
    $num = $_SESSION['num'];
    $filename = "expense";
    $tablename = $name."-".$num;
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
                <div class="income form">
                <form method="POST">
                        <div class="form-group">
                            <label for="expense">Expense Description:</label>
                            <select name="expense" id="expense" class="form-control">
                                <option value="none">--select--</option>
                                <option value="Bills">Bills</option>
                                <option value="Education">Education</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Family">Family</option>
                                <option value="Food &amp; Drinks">Food &amp; Drinks</option>
                                <option value="Gifts">Gifts</option>
                                <option value="Health">Health</option>
                                <option value="Others">Others</option>
                                <option value="Shopping">Shopping</option>
                                <option value="Travel">Travel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mode-expense">Mode of Payment:</label>
                            <select name="mode" id="income" class="form-control">
                                <option value="none">--select--</option>
                                <option value="Cash">Cash</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Net Banking">Net Banking</option>
                                <option value="UPI">UPI</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount Spent:</label>
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>

                        <input type="submit" class="btn btn-default" name="submit">
                    </form>

                    <?php
                       include('../include/connection.php');
                       if(isset($_POST['submit']))
                       {
                           $mode=$_POST['mode'];
                           $source=$_POST['expense'];
                           $amount=$_POST['amount'];
                                                      
                           $query="INSERT INTO `$tablename` values(NULL,'Expense','$source','$mode','$amount')";
                           $ins=mysqli_query($conn,$query);
                       }	
                       ?>

                </div>
            </div>
        </div>
    </div>

    <?php include("../include/footer.php") ?>
</body>

</html>