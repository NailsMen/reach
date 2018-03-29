<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" type="img/x-icon" href="../favicon/icon.png">	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<title>Авторизация</title>
</head>
<body>
	<div class="content">
		<div class="input">
			<form action="index.html" method="POST">
				<input type="email" placeholder="Email" name="email">
				<input type="password" name="password" placeholder="Password">
			</form>
			<button type="submit" name="auth">Sign in</button>
			<hr>
			<div class="forgotPassword"><a href="#"><i class="fas fa-unlock"></i><span>Забыли пароль?</span></a></div>
		</div>
	</div>
</body>
</html>