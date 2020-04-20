<?php require('show_comments.php'); ?>
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
			<h1><?php echo $event['title'];?></h1>
			<p><?php echo $event['date'];?></p>
			<p><?php echo $event['description'];?></p>
			<br>
			<h2>Comments</h2>
			<form action="add_comments.php?id=<?php echo $id;?>" method="post">
				<input class="comment-input" type="text" placeholder="Add comment here" name="comment">
			</form>
			<div>
			<h2>Other Comments:</h2>
			<?php
			$index=1;
			for($k=$i-1;$k>=0;$k--)
			{
				
				echo "<h3>#$index ".$comments[$k]['user_email'].":<br></h3><p>".$comments[$k]['comment']."</p><br>";
				$index++;
			}
			?>
			<br>
		</div>
		</div>
	</div>
</body>
</html>