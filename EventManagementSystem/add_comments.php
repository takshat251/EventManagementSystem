<?php
 session_start();
	require('connection.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$user_email = $_SESSION['user'];
		$comment = $_POST['comment'];
		$event_id = $_GET['id'];

		$query = "INSERT INTO `comments`(`event_id`, `user_email`, `comment`) VALUES ('$event_id','$user_email','$comment')";
		if(mysqli_query($conn , $query))
		{
			header("Location:event_info.php?id=".$_GET['id']);
		}
	}
?>