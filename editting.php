<html>
<head>
<title> HOME </title>

<style>
body
{
	background-image:url('expense3.jpeg');
	background-repeat:no-repeat;
	width:100%;
	height:100%;
	float: left;
}
.xyz
{
	background-color:white;
	
}
</style>
</head>
<body>

<div class="abc">
<div class="xyz">
WELCOME TO THE DAILY EXPENSE
<img src="expense1.jpeg" class="img-responsive">
</div>

</div>

</body>
</html>

<?php
if(isset($_POST['img']))
{
	include "register.php";
}
?>