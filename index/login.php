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
				<h1>Login</h1>
				<br><br>
				<input type="email" id="uName" name="username" placeholder="Email" autocomplete="off"/>
				<span id="usernameErr"></span>
				<input type="password" id="pw" name="password" placeholder="Password" />
				<span id="pwErr"></span>
				<a href="forgot.php">Forgot your password?</a><br>
				<p>Don't have an account? <a href="signup.php">Create account<a></p><br>
				<button name="submit" id="submit">Log In</button>
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

?>

<!-- <script>

function $Id(id){
	return document.getElementById(id);
}

$Id('submit').addEventListener('click', ()=>{
	if($Id('uName').value === null){	
		alert('ok');
		$Id('usernameErr').innerHTML="Error";
	}else{
		alert($Id('uName').value);
		$Id('usernameErr').innerHTML="Error";

	}

	return false;	
})

</script> -->