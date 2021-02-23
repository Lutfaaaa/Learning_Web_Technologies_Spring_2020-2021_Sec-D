<?php

session_start();
if (isseet($_POST['submit']))

	$username =$_POST['username'];
	$password =$_POST['username'];

	if ($username == ""  || $password == ""){
		echo "Enter Your Name & Password"
	}
	if (!preg_match('/^[a-zA-Z][a-zA-Z0-9._]/i', $user_name) && preg_match("/[@#$%]/",$password) && $user_name_length >= 2 && $user_name_length >=
		 8 )
    { 
		$_SESSION['status']=true;
		echo "hello";
	}
	}
	else
	{
		echo "Invalid user";
	}

}
?>