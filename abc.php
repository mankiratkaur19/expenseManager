<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'expense manager') or die('Plz check database');

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query="insert into registration(name,contact,email,password)values('$name','$contact','$email','$password')";
	$ins=mysqli_query($con,$query);
	if($ins)
	{
		echo "inserted";
	} 
	else
	{
		echo "not inserted";
	}
}	
?>
