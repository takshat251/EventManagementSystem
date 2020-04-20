<?php 


include('../events.php');

?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../style.css"> 
</head>
<style>
	body{
		background: url(../campaign-bg.jpg);
	background-position: right;
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:fixed;
	background-size: cover;
	color:#fff;
	height: 100vh;

	}
</style>
<body>
	<div class="navbar">
		<div class="title"><h3>EVENT MANAGEMENT SYSTEM</h3> </div>
		<div class="nav-link logIn"><a href="../logout.php"><h3>Logout</h3></a> </div>
		<div class="nav-link"><a href="ems_admin.php"><h3>Add Event</h3></a></div>
	</div>
	<div>
		<div style="margin-left: 10%;margin-right: 10%;">
		<br/><br/><br/>
		<h1>Events</h1>
		<hr>
		<br/><br/>
		<!-- repeate the below div -->
		<?php
		for($k=0;$k<$i;$k++)
		{
			$id = $events[$k]['id'];
			$title = $events[$k]['title'];
			$description = $events[$k]['description'];
			$date = $events[$k]['date'];
			
			echo "<div>
			<h2>".$title."</h2>
			<p>".$description."</p>
			<p>".$date."</p>
			<br>
			<div style='text-align: right;'>
				<a href='ems_admin_update.php?id=$id&title=$title&description=$description&date=$date' class='btn-update'>Update</a>
				<a class='btn-del' href='delete.php?id=$id'>Delete</a>	
			</div>
			<br>
			<hr>
			<br>
			</div>";
		}
		?>
	</div>
</div>
</body>
</html>