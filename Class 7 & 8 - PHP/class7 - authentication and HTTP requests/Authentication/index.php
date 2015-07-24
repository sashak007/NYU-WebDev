<?php
  if($_COOKIE["user"]) {
  	header("Location: home.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Assignment</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
	<div class="container">
		<nav>
			<img id="logo" src="images/deer-logo.png" />
			<h1>Members Only</h1>
			<div id="login-Status">
				<p>you are not logged in</p>
			</div>
		</nav>
		<div class="clear"></div>
		<section>
			<?php if ($_GET["logged-out"]): ?>
			<p id="logged-out">You have been successfully logged out!</p>
		    <?php endif ?>

			<h2>Please log in</h2>
			<p>Shank boudin beef venison shankle, kevin flank. Fatback leberkas capicola pork. Shank capicola pork.</p>
			
			<?php if ($_GET["loginfailed"]): ?>
			<p id="fail">Log in failed. Username or password incorrect.</p>
		    <?php endif ?>
			
			<form action="/login.php" method="POST">
				<input type="text" name="username" placeholder="username" /><br /><br />
				<input type="password" name="password" placeholder="password" /><br /><br />
				<input type="submit" value="Submit">
			</form>
		</section>
		<footer>
			<p>© 2013 The Web Development Intensive Company</p>
			<nav>
				<ul>
					<li>Contact us</li>
					<li>Terms & Conditions</li>
					<li>Privacy Policy</li>
				</ul>
			</nav>
			<div class="clear"></div>
		</footer>
	</div>
</body>

</html>