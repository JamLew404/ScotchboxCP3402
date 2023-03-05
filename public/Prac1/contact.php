<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styles/mainstyles.css">
<html>
<head>
	<title>Plantifier - Contact Us</title>
</head>
<body>
<div class="container">
	<div class="navigation">
		<h2>Navigation</h2>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<div class="main">
		<h1>Contact Us</h1>
		<form action="send_email.php" method="post">
			<label>Name:</label>
			<input type="text" name="name"><br>

			<label>Email:</label>
			<input type="email" name="email"><br>

			<label>Message:</label>
			<textarea name="message"></textarea><br>

			<input type="submit" value="Send">
		</form>
	</div>
</div>
</body>
</html>