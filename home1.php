<html>
<head>
<title> HOME </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
.abc
{
	background-image:url('expense5.jpeg');
	background-repeat:no-repeat;
	width:100%;
	height:100%;
	float: left;
	background-attachment: fixed;
    background-size: 97% 96%;
}
.xyz
{
	background-color:white;
	text-align: center;
    font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	display: block;
	padding: 10px 10px;
	margin-top: 50px;
	margin-left: 50px;
	margin-right: 50px;
	margin-block: 6px;
	color: hotpink;
}
p
{
	text-align: center;
}
</style>
</head>
<body>

<div class="abc">
<div class="xyz">
WELCOME TO THE DAILY EXPENSE
<p>
<form action="" method="POST">
	<table>
		<tr>
			<td> <input type="submit" name="register" value="Register" class="btn btn-primary"> 
			<?php
if(isset($_POST['register']))
{
	include "register1.php";
}
?>

</td>

		</tr>
		
	</table>
</form>
</p>
</div>

</div>

</body>



</html>
