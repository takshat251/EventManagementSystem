<?php
	require('events.php');
?>
<html>
<head>
	<title>Event management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<style>
	body{
		background: url(./campaign-bg.jpg);
	background-position: right;
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:fixed;
	background-size: cover;
	color:#fff;
	height: 100vh;
	}
</style>
</head>
<body>
	<div class="navbar">
		<div class="title"><h3>EVENT MANAGEMENT SYSTEM</h3> </div>
		<div class="nav-link logIn"><a href="logout.php"><h3>Log Out</h3></a> </div>
		<div class="nav-link"><a href="#">
			<?php if(isset($_SESSION['user'])){
				echo "<h3>Welcome: ".$_SESSION['user']."</h3>";
			}
			?>
		</a></div>
	</div>
	<div>
		<div style="margin-left:10%;margin-right:10%;">
	<br><br><br>
		<h1>Events</h1>
		<hr>
		<br><br>
		<?php
		for($k=0;$k<$i;$k++)
		{
			$id = $events[$k]['id'];
			$title = $events[$k]['title'];
			$description = $events[$k]['description'];
			$date = $events[$k]['date'];
			echo "<div class='details'>
			<h1 class='name'>".$events[$k]['title']."</h1>
			<p class='desc'>".$events[$k]['description']."</p>
			<div style='text-align: right;'>
			<a class='btn-update' href='event_info.php?id=$id'>view event</a>
			</div>
			</div><br/><hr><br/>
			";
		}
		?>
		</div>
	</div>

</body>
</html>