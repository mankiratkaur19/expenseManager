<?php
                       
    include('../include/connection.php');
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $tablename = $name."-".$contact;
        $query="INSERT INTO `registration` VALUES(NULL,'$name','$contact','$email','$password')";
        $ins=mysqli_query($conn,$query);
        if ($ins) 
        {
            $query = mysqli_query($conn,"CREATE TABLE `$tablename`( `Trans Id` INT NOT NULL AUTO_INCREMENT , `Category` VARCHAR(10) NOT NULL, `Source` VARCHAR(20) NOT NULL, `Mode` VARCHAR(20) NOT NULL , `Amount` INT NOT NULL , PRIMARY KEY (`Trans Id`)) ENGINE = InnoDB;");
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['num']=$contact;
            header("location: ../dashboard/");
        } 
        else 
        {
            header("location: ../");
        }
}	
?>