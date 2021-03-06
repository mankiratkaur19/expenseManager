<?php

session_start();
$filename = "register";
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

    <?php include('../include/header.php'); ?>

    <div class="text-center" style="height: 75vh; display: flex; width: 100vw;">
        <div class="content" style="height: inherit;">

            <div class="text-left form" style="display: flex; background-color:lightsteelblue; font-size:20px" ;>

                <form action="register-verify.php" method="post" autocomplete="off">
                    <h1 style="text-align: center;">REGISTER YOURSELF!!</h1><br>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact No.:</label>
                        <input type="number" class="form-control" id="contact" name="contact">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
    <?php include('../include/footer.php'); ?>

</body>

</html>