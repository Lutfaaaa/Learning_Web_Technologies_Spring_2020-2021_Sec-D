<?php

	if(isset($_POST['submit'])){

		$Date_of_Birth	= $_POST['dob'];

		if($Date_of_Birth == "" ){
			echo "null submission";
		}else{
			echo $Date_of_Birth;

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>DATE OF BIRTH Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Name</legend>
			<input type="date" name="dob" value="<?php echo $Date_of_Birth; ?>"> 
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html> 

