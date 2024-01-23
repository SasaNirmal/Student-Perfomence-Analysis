<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>

	<link rel="stylesheet" type="text/css" href="Style.css">

</head>
<body background="back2.jpg" class="login_back"> 
			
			<div class="form_deg">

				<div class="title_deg">
					Login Form</div>

					<p>
						<?php

						error_reporting(0);
						session_start();
						session_destroy();

						echo $_SESSION['loginMessage'];
						?>

					</p>
				
				<form action="login_check.php" method="POST" class="login_form">

					<div>
						<label class="label_deg">Username</label>
						<input type="text" name="username">
					</div>

					<div>
						<label class="label_deg">Password</label>
						<input type="Password" name="password">
					</div>

					<div>
						
						<input class="btn btn-primary" type="submit" name="submit" value="Login">
					</div>
					<p>You want to exit ? <a href="index.php">click here</a>.</p>
				</form>


			</div>
</body>
</html>