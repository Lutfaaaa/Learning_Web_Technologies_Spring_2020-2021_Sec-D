<?php

	if(isset($_POST['submit'])){

		$Gender= $_POST['gender'];

		if($Gender == "" ){
			echo "null submission";
		}else{
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
	<form method="post" action="">
		<fieldset>
			<legend>Gender</legend>
			<input type="radio"name="gender"value="<?php echo $Gender;?>">Male   
       <input type="radio"name="gender"value="<?php echo $Gender;?>">Female
	       <input type="radio"name="gender"value="<?php echo $Gender;?>">Other
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html> 

