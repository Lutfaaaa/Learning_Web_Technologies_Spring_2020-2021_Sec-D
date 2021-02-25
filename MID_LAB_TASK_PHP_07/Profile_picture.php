<?php

session_start();
$user = $_SESSION['current_user'];
$updateinfo = $_SESSION['updateInfoDone'];
 
if ( $updateinfo == 1 ){
    $updateinfo = 1 ;
}else
$updateinfo = 0;

$user_name = $user['user_name'];
$gender = $user['gender'];
$date_birth = $user['date_barth'];
$email =  $user['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture</title>
</head>
<body>
	<table  width="500px" border="1">
		<tr>
			<td align="left" colspan="3">
				<img width="80px"src="logo.png">
				<div align="right">
					Logged in as<a href="3"><?php echo $user_name ?> </a>/
					<a href="LOGIN.html">Login</a>
				</div>
			</td>

		</tr>
	<tr>
			<td height="200px"><h2>Account</h2>
			<ul>
			<li><a href="Dashboard.html">Dashboard</a></li>
			<li><a href="view_Profile.html">View Profile</a></li>
			<li><a href="Edit_Profile.html">Edit Profile</a></li>
			<li><a href="Change_Profile_Picture.html">Change Profile Picture</a></li>
			<li><a href="Change_Password.html">Change Password</a></li>
			<li><a href="LOGIN.html">Logout</a></li>
		</ul>
	</td>
<td>
	<fieldset>
	<legend>Profile Picture</legend>
<table>
	<tr>
		<td><img width="80px" src="user.png"><br>
			<input type="file"name="Choose File"value="Choose file">
		</td>
	</tr>
	<tr>
		<td><input type="submit"value="Submit"></td></tr>
</table>
</fieldset>
<tr> 
	<td colspan="2" align="center">Copyright 2017</td>
	</tr>
</td>
</tr>
</table>
</body>
</html>

