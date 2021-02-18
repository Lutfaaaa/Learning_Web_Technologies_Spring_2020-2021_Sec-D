<?php

	if(isset($_POST['submit'])){

		$Email = $_POST['Email'];

		if($Email == "" ){
			echo "null submission";
		}else{
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
	<form method="post" action="">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="text" name="Email" value="<?php echo $Email; ?>"> 
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html> 

