<?php
if (isset($_POST['submit']))
{
	$Email =$_POST['Email'];

if ($Email == "") 
{
	echo "null submission";
}
else
 {
	echo $Email;
 }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
<form method ="post" action ="">
	<fieldset>
		<legend>EMAIL</legend>
		<input type="email" name="Email" value="">
		<hr>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>
