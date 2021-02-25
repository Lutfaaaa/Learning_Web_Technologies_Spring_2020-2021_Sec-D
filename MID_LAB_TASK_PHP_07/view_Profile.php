<?php

session_start();
$user = $_session['current_user'];

$user_name = $user['user_name'];
$gender = $user['gender'];
$date_birth = $user['date_birth'];
$email = $user['email'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	<table  width="500px" border="1">
		<tr>
			<td align="left" colspan="3">
				<img width="80px"src="logo.png">
				<div align="right">
					Logged in as<a href="3"> <?php echo $user_name ?> </a>/
					<a href="LOGIN.html">Logout</a>
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
			<li><a href="Change_Password">Change Password</a></li>
			<li><a href="LOGIN.html">Logout</a></li>
		</ul>
	</td>
<td>
	<fieldset>
	<legend>PROFILE</legend>
<table>
	<tr>
		<td>Name   :</td>
		<td><?php echo $user_name ?> </td>
		<td rowspan="3"><img width="60px" src="user.png"><br>
			<a href="Change.html">Change</a></td>
		</tr>
		<tr><td> Email   :</td>
			<td><?php echo $email ?> </td> </tr>
		<tr><td>Gender   :</td>
            <td><?php echo $gender ?> </td>
		</tr>
		<tr><td>Date of Birth:</td>
            <td><?php for(  $i = 0 ; $i < count($date_birth) ; $i++){echo $date_birth[$i]; if( $i !=2 ) { echo "/";  } } ?> </td> 
		</tr>
		<tr><td><a href="">Edit Profile</a> 

</td>
</tr>
</table>
	<tr>
	<td colspan="2" align="center">Copyright 2017</td>
	</tr>
</table>
</fieldset>
</body>
</html>