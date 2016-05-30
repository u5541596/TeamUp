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
	
	<?php
	$firstnameErr = $lastnameErr = $accountErr = $passwordErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   if (empty($_POST["firstname"])) {
		 $firstnameErr = "Name is required";
	   } 
	   
	   if (empty($_POST["lastname"])) {
		 $lastnameErr = "Name is required";
	   }
		 
	   if (empty($_POST["account"])) {
		 $accountErr = "Account is required";
	   } 

	   if (empty($_POST["password"])) {
		 $passwordErr = "password is required";
	   } 
	}
	?>
		
	<div data-role="page" id="pagetwo">
		<div data-role="header">
			<h1>TeamUp Profile</h1>
		</div>
		<div data-role="content">
		<p><span class="error">* required</span></p>
		<form action="/demo/register.php" method="post">
		<div data-role="fieldcontain">
			<label for="account">Account:</label>
			<input type="text" name="account" id="account">
			<span class="error">* <?php echo $accountErr;?></span>
			<br>
			<br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span class="error">* <?php echo $passwordErr;?></span>
			<br>
			<br>
			<label for="firstname">First Name:</label>
			<input type="text" name="firstname" id="firstname">
			<span class="error">* <?php echo $firstnameErr;?></span>
			<br>
			<br>
			<br>
			<label for="lastname">Last Name:</label>
			<input type="text" name="lastname" id="lastname">
			<span class="error">* <?php echo $lastnameErr;?></span>
			<br>
			<br>
			<label for="age">Age:</label>
			<input type="number" name="age" id="age">
			<br>
			<br>
			<fieldset data-role="controlgroup" data-type="horizontal">
			<legend>Gender:</legend>
			<label for="male">male</label>
			<input type="radio" name="gender" id="male" value="male">
			<label for="female">female</label>
			<input type="radio" name="gender" id="female" value="female">
			</fieldset>			
			<br>
			<br>
			<br>
			<label for="info">Personal Introduction:</label>
			<textarea name="addinfo" id="info"></textarea>
			<br>
			<br>
			<label for="sportstype">Favorite Sports: </label>
			<select name="sportstype" id = "sportstype" multiple="multiple" data-native-menu="false">
				<option value="cricket">cricket</option>
				<option value="football">football</option>
				<option value="tennis">tennis</option>
				<option value="pingpong">table tennis</option>
				<option value="rugby">badminton</option>
				<option value="basketball">basketball</option>
				<option value="volleyball">volleyball</option>
				<option value="cycling">cycling</option>
				<option value="squash">squash</option>
				<option value="pool">pool</option>
				<option value="running">running</option>
			</select>
			<br>
			<br>
			<fieldset data-role="controlgroup" data-type="horizontal">
			<legend>Occupation:</legend>
			<label for="student">student</label>
			<input type="radio" name="occupation" id="student" value="student">
			<label for="staff">staff</label>
			<input type="radio" name="occupation" id="staff" value="staff">
			</fieldset>	
		</div>
			<br>
			<br>
			<input type="submit" data-inline="true" name="submit" value="submit">
			<input type="reset" data-inline="true" value="reset">
			<a href="test.php" data-role="button" data-inline="true">ccc</a>
		</form>
		</div>
	</div> 
	</body>
</html>