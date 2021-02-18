<?php


	if ( isset ($_POST['submit'])){

		$Date_of_Birth	= $_POST['dob'];

		if($Date_of_Birth == "" ){
			echo "null submission";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request";
	}
?> 