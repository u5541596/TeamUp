<html>
	<head>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	<style>
	.error {color: #FF0000;}
	</style>
	</head>
	<body>
	<div data-role="page" id="pageone">
		<div data-role="header">
		<h1>TeamUp Login</h1>
		</div>
		<div data-role="content">
		<form method="post" action="/demo/login.php"> 
			<label for="account">Account</label>
			<input type="text" data-inline="true" name="account" id="account">
			<br> 
			<br>
			<label for="password">Password</label>
			<input type="password" data-inline="true" name="password" id="password">
			<input type="submit" data-inline="true" name="submit" value="submit">
			<a href="Register_profile.php" data-role="button" data-inline="true">register</a>
			<input type="reset" data-inline="true" value="reset">
		</form>
		</div>
	</div>
	</body>
</html>