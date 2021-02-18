<?php

	if(isset($_POST['submit'])){

		$Blood_Group= $_POST['bloodgroup'];

		if($Blood_Group == "" ){
			echo "null submission";
		}else{
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
	<form method="post" action="">
		<fieldset>
			<legend>BLOOD GROUP</legend>
	  Blood Group <select>
	  	<option value="<?php echo $Blood_Group; ?>">A+</option>
	  	<option value="<?php echo $Blood_Group; ?>">A-</option>
	  	<option value="<?php echo $Blood_Group; ?>">B+</option>
	  	<option value="<?php echo $Blood_Group; ?>">B-</option>
	  	<option value="<?php echo $Blood_Group; ?>">O+</option>
	  	<option value="<?php echo $Blood_Group; ?>">O-</option>
	  	<option value="<?php echo $Blood_Group; ?>">AB+</option>
	  	<option value="<?php echo $Blood_Group; ?>">AB-</option>
 
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html> 

