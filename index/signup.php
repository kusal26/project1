<?php
include 'database.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Handmade Craft</title>
</head>
<body>
	
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#" method="POST">
				<h1>Sign up</h1>
				<br><br>
				<input type="text" name="name" placeholder="Name" />
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<input type="password" placeholder="Re-type Password" />	
				<p>Already have an account?<a href="login.php">Log In<a></p><br>
				<button name='submit'>Sign Up</button>
			</form>
		</div>
	</div>
</body>
</html>