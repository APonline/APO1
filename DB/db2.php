<?php
	// Connection to database
	$connection=mysqli_connect("208.97.173.114","apanemia","milkmilk1","dronewolfpack");
	// Check connection
	if (mysqli_connect_errno()){
    	echo 'NOT_OK';
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

  	mysqli_close($connection);
?>