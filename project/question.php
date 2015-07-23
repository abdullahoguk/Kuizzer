<!DOCTYPE html>
<html>
	<head>
		<title>Kuizzer</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>KUIZZER</h1>
			</div>
		</header>

		<main>
			<div class= "container">
				<div class= "current">Question 1 of 5</div>
				<p class="question">What is PHP stand for?</p>
				<form method="post" action="process.php">
					<ul class="choices">
					   <li><input name="choice" type="radio" value="1">PHP Hypertext Preprocessor</li>
					   <li><input name="choice" type="radio" value="1">Private Hompage</li>
					   <li><input name="choice" type="radio" value="1">Persona Hompage</li>
					   <li><input name="choice" type="radio" value="1">Personal Hypertext Preprocessor</li>
					</ul>
					<input type="submit" value="Submit">
				</form>
			</div>
		</main>

		<footer>
			<div class="container">
				Copyright &copy; MMXV, Kuizzer
			</div>
		</footer>

	</body>
</html>