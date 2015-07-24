<?php session_start(); ?>
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
				<h2>You are done!</h2>
				<p>You completed the test</p>
				<p>Final score: <?php echo $_SESSION['score']; ?></p>
				<a href="question.php?n=1" class="start">Start Again</a>
			</div>
		</main>

		<footer>
			<div class="container">
				Copyright &copy; MMXV, Kuizzer
			</div>
		</footer>

	</body>
</html>
<?php session_unset(); ?>