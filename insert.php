<?php

	$con = mysqli_connect('127.0.0.1','root','');

	if (!$con) 
	{
		echo 'Not Connected to server';
	}
	if (!mysqli_select_db($con,'tutorial'))
	 {
		echo 'Database Not Selected';
	}
	$Name = $_POST['username'];
	$Email = $_POST['email'];
	$Phone = $_POST['phone'];
	$Gender = $_POST['gender'];
	$Age = $_POST['age'];
	$heard = $_POST['heard'];
	$Rate = $_POST['rate'];
	$Improve = $_POST['improve'];

	$sql = "INSERT INTO person (Name, Email, Phone, Gender, Age, heard, Rate, Improve) VALUES ('$Name' , '$Email', '$Phone','$Gender','$Age', '$heard', '$Rate', '$Improve')";
	if (!mysqli_query($con,$sql))
	 {
		echo 'Not Inserted';
	}
	else{
		echo 'Inserted';
	}
	header("refresh:2; url=index.html");     // index.php


?>

