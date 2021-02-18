<?php


	if ( isset ($_POST['submit'])){

		$Email 		= $_POST['Email'];

		if($Email == "" ){
			echo "null submission";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request";
	}
?> 