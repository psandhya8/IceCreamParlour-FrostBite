<?php

	$pdo=new
	pdo('mysql:host=localhost;dbname=feedback','root','');

	session_start();
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];

	$insert=$pdo->prepare("insert into feedback(firstname,lastname,email,feedback) values(:firstname,:lastname,:email,:feedback)");

	$insert->bindParam(':firstname',$firstname);
	$insert->bindParam(':lastname',$lastname);
	$insert->bindParam(':email',$email);
	$insert->bindParam(':feedback',$feedback);

	$insert->execute();
	header('location:index.html');

?>