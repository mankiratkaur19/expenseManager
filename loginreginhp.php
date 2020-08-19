<html>
<body>
<form action=" " method="post">
<table border="2">
<tr><td colspan="2">Login</td></tr>
<tr><td>Username</td><td><input type="text" name="username"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
</table>
</html>


<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'hp') or die('plz check database');

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
   
	$query=mysqli_query($con,"select * from registration where username='$username' && password='$password'");
	
	$row=mysqli_fetch_array($query);
	if($row>0)
	{
		header("location:registrationinhp.php");
	} 
	else
	{
		echo "username and password not valid";
	}
}
?>