<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="en">
<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public_html/styles/login.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	<div class="line first"></div>
	<form method="post" action="controller/login.php">
	
		<span class="login100-form-title">
			Ingresa
		</span>
		<div class="form-group">
			<input class="form-control col-sm-2 " type="text" name="username" placeholder="username" required>		
		</div>

		<div class="form-group" data-validate = "Enter password">
			<input class="form-control col-sm-2 " type="password" name="password" placeholder="password" required>
		</div>

		<div class="form-group">
			<input type="submit" class="btn-sub" value="Sign In" name="loginSubmit">		
		</div>
	</form>
	<div class="line"></div>
</body>
</html>