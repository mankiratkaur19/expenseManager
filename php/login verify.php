<?php

    include('../include/connection.php');   
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $query=mysqli_query($conn,"SELECT * FROM `registration` WHERE `name`='$name' AND `password`='$password'");
        if(mysqli_num_rows($query)>0)
        {
            session_start();
            $_SESSION['name']=$name;
            $row = mysqli_fetch_array($query);
            $_SESSION['num'] = $row['contact'];
            header("location: ../dashboard/");
        }
        else
        {
            header("location: ../");
        }
    }
?>