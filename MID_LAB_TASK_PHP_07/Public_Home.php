<?php

 session_start();
 if(isset($_SESSION['status'])){

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body>

<table  width="600px" border="1">
		<tr>
			<td align="left" colspan="3">
				<img width="80px"src="logo.png">
				<div align="right">
					<a href="Home.html">Home</a>/
					<a href="Login.html">Login</a>/
					<a href ="Registration.html">Registration</a>
				</div>
			</td>

		</tr>
	<tr><td height="300px">Welcome to xCompany</td></tr>
	<tr><td align="center">Copyright 2017</td>
	</tr>
</table>
</body>
</html>

<?php
}else{

	header('location:LOGIN.html');
}
?>

