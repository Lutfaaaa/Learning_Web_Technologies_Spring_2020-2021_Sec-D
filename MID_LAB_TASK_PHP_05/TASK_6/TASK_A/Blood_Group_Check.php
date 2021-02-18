<?php


	if ( isset ($_POST['submit'])){

		$Blood_Group= $_POST['bloodgroup'];

		if($Blood_Group == "" ){
			echo "null submission...";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request...";
	}
?> 