<?php

include('connection.php');

        
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        
        $password=$_POST['password'];
        $query=mysqli_query($conn,"SELECT * FROM `registration` WHERE `name`='$name' AND `password`='$password'");
        if(mysqli_num_rows($query)>0)
    {
        echo"verified";
        session_start();
        $_SESSION['name']=$name;
       header("location: dashboard.php");
    }
    else 
    echo "not verified";
    }
?>