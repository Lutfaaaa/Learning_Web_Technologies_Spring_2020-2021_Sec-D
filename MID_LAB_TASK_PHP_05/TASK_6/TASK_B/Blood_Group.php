<?php
if (isset($_POST['submit']))
{
	$Blood_Group=$_POST['bloodgroup'];

if ($Blood_Group== "") 
{
	echo "null submission";
}
else
 {
	echo $Blood_Group;
 }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Input</title>
</head>
<body>
<form method ="post" action ="">
	<fieldset>
		<legend>BLOOD GROUP</legend>
			  Blood Group <select>
	  	<option value="">A+</option>
	  	<option value="">A-</option>
	  	<option value="">B+</option>
	  	<option value="">B-</option>
	  	<option value="">O+</option>
	  	<option value="">O-</option>
	  	<option value="">AB+</option>
	  	<option value="">AB-</option>
		<hr>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>
