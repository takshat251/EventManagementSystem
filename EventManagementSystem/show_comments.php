<?php
    session_start();
	require('connection.php');
	if(!isset($_SESSION['user']))
	{
		header('Location:index.php');
	}
	$id = $_GET['id'];
	$query = "SELECT `title`, `description`, `date` FROM `events` WHERE `id`='$id'";
	$result = mysqli_query($conn , $query);
	$event = mysqli_fetch_assoc($result);
	

	
	$i =0 ;

	$query = "SELECT * FROM `comments` WHERE `event_id`='$id'";
	$result = mysqli_query($conn , $query);
	while($row = mysqli_fetch_assoc($result))
	{
		$comments[$i] = $row;
		$i++;
	}


?>