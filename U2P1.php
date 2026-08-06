<?php
	$conn = mysqli_connect('localhost','root','');
	
	$sql = "Create database mydb";
	$retval = mysqli_query($conn,$sql);
	
	if(! $retval)
	
	{
		die('Could not create database:');
	}
	echo "database created succesfully";
	
	mysqli_close($conn)
?>
