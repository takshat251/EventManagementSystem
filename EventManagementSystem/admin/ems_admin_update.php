<?php require('update.php');?>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div class="navbar">
		<div class="title"><h3>EVENT MANAGEMENT SYSTEM</h3> </div>
		<div class="nav-link logIn"><a href="../logout.php"><h3>Logout</h3></a> </div>
		<div class="nav-link"><a href="ems_admin_events.php"><h3>Your Events</h3></a></div>
	</div>
	<div class="container">
		<form action="update.php?id=<?php if(isset($_GET['id'])) echo $_GET['id'];?>" method="post">
			<h1 class="form-title">Update Event</h1>
			<div class="login-form">
				<div class="form-group">
					<label class="form-label">Title:</label><br/>
					<input type="text" class="form-control" placeholder="Enter Title" value="<?php if(isset($_GET['title'])){echo $_GET['title'];}?>" name="title">
				</div>
				<div class="form-group">
					<label class="form-label">Date:</label><br/>
					<input type="date" class="form-control" value="<?php if(isset($_GET['date'])){echo $_GET['date'];}?>" name="date">
				</div>
				<div class="form-group">
					<label class="form-label">Description:</label><br/>
					<textarea  name="description" class="form-control" placeholder="Description"><?php if(isset($_GET['description'])){echo $_GET['description'];}?></textarea>
				</div>
				<input type="submit" class="btn" value="Update"><br/>
			</div>
		</form>
	</div>
</body>
</html>