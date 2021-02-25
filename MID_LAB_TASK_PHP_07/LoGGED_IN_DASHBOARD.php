<?php

session_start();
$user = $_SESSION['current_user'];
$user_name=$user ['user_name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGGED IN DASHBOARD</title>
</head>
<body>
	<table align="center" width="500px" border="1" height="500px">
		<tr>
			<td align="left" colspan="3">
				<img width="80px"src="logo.png">
				<div align="right">
					Logged in as<a href="3"> <?php $echo   $user_name ?> </a>/
					<a href="LOGIN.html">Login</a>
				</div>
			</td>

		</tr>
	<tr>
			<td height="200px"><h2>Account</h2>
			<ul>
			<li><a href="Dashboard.html">Dashboard</a></li>
			<li><a href="view_Profile.html">View Profile</a></li>
			<li><a href=Edit_Profile.html">Edit Profile</a></li>
			<li><a href="Change_Profile_Picture.html">Change Profile Picture</a></li>
			<li><a href="Change_Password">Change Password</a></li>
			<li><a href="LOGIN.html">Logout</a></li>
		</ul>
	</td>
	<td><h1>Welcome <?php echo $use_name ?> </h1></td>
</tr>		
	<tr>
	<td colspan="2" align="center">Copyright 2017</td>
	</tr>
</table>
</body>
</html>