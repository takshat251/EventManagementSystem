<?php 
    require('register.php');
    
?>
<html>
<head>
	<title>Event management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="navbar">
		<div class="title"><h3>EVENT MANAGEMENT SYSTEM</h3> </div>
		<div class="nav-link logIn"><a href="ems_login.php"><h3>Sign In</h3></a> </div>
		<div class="nav-link"><a href="index.php"><h3>Sign Up</h3></a></div>
	</div>
		<div class="content">
			<h1>EVENT MANAGEMENT SYSTEM</h1>
		</div>
		<div class="form">
			<form action="index.php" method="post" class="register_form">
				<h1 class="form-title">Register</h1>

				<?php
					if(!empty($response)){
						echo "<div class='form-group'><span>".$response."</span> </div>";
					}
					if(!empty($correct_response)){
						echo "<div class='formn-group'><span style='color:green;'>".$correct_response."</span></div>";
					}
				?>

				<div class="form-group">
				   <label class="form-label">Name :</label>
				   <input class="form-control" id="name" placeholder="Name" name="name">
			    </div>
			    <div class="form-group">
			    	<label class="form-label">E-mail :</label>
			    	<input class="form-control" id="email" placeholder="Email" name="email">
			    </div>
			    <div class="form-group" for="password">
			    	<label class="form-label">Password :</label>
			    	<input type="password" class="form-control" id="password" placeholder="Password" name="password">
				</div>
			    <input class="btn" type="submit" value="Register"></button>
			</form>
		</div>
</body>
</html>