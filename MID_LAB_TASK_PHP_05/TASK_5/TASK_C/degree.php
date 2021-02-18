<?php

	if(isset($_POST['submit'])){

		$Degree= $_POST['degree'];

		if($Degree == "" ){
			echo "null submission";
		}else{
			echo $name;

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Degree</legend>
           <input type="checkbox"name="degree"value="<?php echo $Degree;?>">SSC
	       <input type="checkbox"name="degree"value="<?php echo $Degree;?>">HSC
	       <input type="checkbox"name="degree"value="<?php echo $Degree;?>">BSc
	       <input type="checkbox"name="degree"value="<?php echo $Degree;?>">MSc 
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html> 

