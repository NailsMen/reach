<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../main.css">
<meta name="description" content="Информационно-развлекательный портал">
<meta name="keywords" content="Reach, rea,рич">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="img/x-icon" href="favicon/icon.png">
<title>Reach</title>
</head>
<body>
	
<?php require('../blocks/header_english.php'); ?>

<div class="wrap-reg_auth">
	<div class="wrap-auth">
		<pre>Authorization</pre>
		<hr>
		<form method="POST">
			<input type="text" placeholder="Email or login" name="login_email">
			<input type="password" placeholder="Password" name="password_auth">
		</form>
		<p><a href="#">Forgot your password?</a></p>
		<span><button type="submit" name="auth">To come in</button></span>
		
	</div>
	<div class="hr"><hr></div>
	<div class="wrap-reg">
	<pre>Registration</pre>
	<hr>
		<form method="POST">
			<input type="text" name="Login" placeholder="login">
			<input type="Email" name="Email" placeholder="Email">
			<input type="password" name="password_reg" placeholder="Password">
			<input type="password" name="password_reg_verifi" placeholder="The password again">
		</form>
		<span><button name="reg">Sign Up</button></span>
	</div>
</div>


<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
</body>
</html>


