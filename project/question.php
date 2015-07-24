<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
//set question number
$number = (int) $_GET['n'];

//get total number of questions
		$query = "SELECT * FROM questions";
		$result = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
		$total = $result->num_rows;


//get question
$query = "SELECT * FROM questions
			WHERE question_number = $number";
//get result
	$result = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
	$question = mysqli_fetch_assoc($result);


//get choices
$query = "SELECT * FROM choices
			WHERE question_number = $number";

//get result
	$choices = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
	


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
			<div class= "container">
				<div class= "current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
				<p class="question"><?php echo $question['text']; ?></p>
				<form method="post" action="process.php">
					<ul class="choices">
						<?php while($row = mysqli_fetch_assoc($choices)): ?>
					   <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
					  <?php endwhile; ?>
					</ul>
					<input type="submit" value="Submit">
					<input type="hidden" name="number" value="<?php echo $number;?>">
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