<?php
if (isset($_POST['submit']))
{
	$Gender =$_POST['gender'];

if ($Gender == "") 
{
	echo "null submission";
}
else
 {
	echo $Gender;
 }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
<form method ="post" action ="">
	<fieldset>
		<legend>Gender</legend>
		   <input type="radio"name="gender"value="Male">Male   
       <input type="radio"name="gender"value="Female">Female
	       <input type="radio"name="gender"value="Other">Other
		<hr>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>
