<?php include 'database.php'; ?>
<?php 
//get total questions
$query = "SELECT * FROM questions";
	//get results
$results = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
$total = $results->num_rows;
 ?>
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
			<div class="container">
				<h2>Test Your Knowledge!</h2>
				<p>This is just a simple quizzer to test your knowledge!</p>
				<ul>
				    <li><strong>Number of questions: </strong><?php echo $total; ?></li>
				    <li><strong>Type: </strong>Multiple Choice</li>
				    <li><strong>Estimated time: </strong><?php echo $total * 0.75; ?> min</li>
				</ul>
				<a href="question.php?n=1" class="start">Start Kuiz</a>
				<a href="add.php" class="add">Add Question</a>

			</div>
		</main>

		<footer>
			<div class="container">
				Copyright &copy; MMXV, Kuizzer
			</div>
		</footer>

	</body>
</html>