<?php 
	$db_host = 'localhost';
	$db_name = 'kuizzer';
	$db_user = 'user';
	$db_pass = 'password';
	$connection = mysqli_connect($db_host, $db_user,$db_pass, $db_name );
	if(mysqli_connect_errno()){
		echo "Failed to connect MYSQL".mysqli_connect_errno();
	}


?>