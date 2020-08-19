<html>
<head>
<title>
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                    
                </div>
                <div class="form-group">
                    <label for="contact">Contact No.</label>
                    <input type="text" class="form-control" name="contact">
                </div>
                <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    
                    <input type="submit" class="form-control btn btn-primary" name="submit">


 <?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'expense') or die('Plz check database');

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
	$contact=$_POST['contact'];
	$query="insert into registration(username,password,contact,email)values('$username','$password','$contact','$email')";
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

                </div>
            </form>
        </div>


    </div>

</div>



</body>
</html>