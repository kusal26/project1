<?php
include '../database/database.php';

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
			<form action="#" method="POST" autocomplete="off">
				<h1>Forgot Password</h1>
				<br><br>
				<label for="country">Choose a country:</label>
				<select name="country" id="country">
				  <optgroup label="country">
					<option value="Nepal">Nepal</option>
					<option value="India">India</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="Pakistan">Pakistan</option>
				  </optgroup>
				</select>
				
                <input type="varchar" placeholder="phone number">
				<button name="submit" id="submit">Click</button>
                <a href="login.php">Go Back</a>
                <br>
                
			</form>
		</div>
	</div>
</body>
</html>

<?php
$conn= new Connection();

if (isset($_POST['submit'])) {
  
    $username = $_REQUEST['username'];
	$password= $_REQUEST['password'];
	if(!empty($username) && !empty($password)){
		$conn->getLoggedIn($username,$password);
	}
  
	
}

