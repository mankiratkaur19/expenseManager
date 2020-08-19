<html>
<head>
<title> Registration </title>
</head>
<body>
<form action=" " method="post">
<table border="2">
<tr><td colspan="2">Registration</td></tr>
<tr><td>Username</td><td><input type="text" name="username"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
<tr><td>Email Id</td><td><input type="email" name="email"></td></tr>
<tr><td>Contact No</td><td><input type="text" name="contact"></td></tr>


<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
//registration.php
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'hp') or die('plz check database');

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
	$contact=$_POST['contact'];
	$query="insert into registration(username,password,email,contact)values('$username','$password','$email','$contact')";
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