<?php
if (isset($_POST['submit']))
{
	$Degree=$_POST['degree'];

if ($Degree== "") 
{
	echo "null submission";
}
else
 {
	echo $Degree;
 }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree Input</title>
</head>
<body>
<form method ="post" action ="">
	<fieldset>
		<legend>Degree</legend>
		   <input type="checkbox"name="degree"value="">SSC
	       <input type="checkbox"name="degree"value="">HSC
	       <input type="checkbox"name="degree"value="">BSc
	       <input type="checkbox"name="degree"value="">MSc
<hr>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>
