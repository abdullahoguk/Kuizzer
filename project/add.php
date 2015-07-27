<?php include 'database.php'; ?>
<?php 
if(isset($_POST['submit'])){
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$choices = array();
	$choices[1] = $_POST['choice1'];
	$choices[2] = $_POST['choice2'];
	$choices[3] = $_POST['choice3'];
	$choices[4] = $_POST['choice4'];
	$choices[5] = $_POST['choice5'];
	$correct_answer = $_POST['correct_answer'];

	//Question query
	$query = "INSERT INTO `questions` (question_number, text)
		VALUES('$question_number', '$question_text')";

	$insert_row = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);

	if ($insert_row) {
		foreach ($choices as $choice => $value) {
			if ($value != '') {
				if ($correct_answer == $choice) {
					$is_correct = 1;
				}
				else{
					$is_correct = 0;
				}

				//choice query
				$query = $query = "INSERT INTO `choices` (question_number, is_correct, text)
					VALUES('$question_number', '$is_correct', '$value')";

				$insert_row = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
				if ($insert_row) {
					continue;
				}
				else{
					die($mysqli_error.__LINE__);
				}
			}
		}
		$msg = "Question added successfully!";
	}
}

	//get total questions
	$query = "SELECT * FROM questions";
		//get results
	$results = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
	$total = $results->num_rows;
	$next = $total + 1;

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
				<a href="index.php" class="add">Home</a>
				<a href="question.php?n=1" class="start">Start Kuiz</a>
				
			</div>
		</header>

		<main>
			<div class="container">
				<h2>Add a question...</h2>
				<?php if (isset($msg)){echo "<p>".$msg."</p>";} ?>
				<form method="post" action="add.php">
					<p>
						<label>Question Number</label>
						<input type="number" name="question_number" value= "<?php echo $next;  ?>">
					</p>
					<p>
						<label>Question</label>
						<input type="text" name="question_text">
					</p>
					<p>
						<label>Choice #1</label>
						<input type="text" name="choice1">
					</p>
					<p>
						<label>Choice #2</label>
						<input type="text" name="choice2">
					</p>
					<p>
						<label>Choice #3</label>
						<input type="text" name="choice3">
					</p>
					<p>
						<label>Choice #4</label>
						<input type="text" name="choice4">
					</p>
					<p>
						<label>Choice #5</label>
						<input type="text" name="choice5">
					</p>
					<p>
						<label>Correct answer</label>
						<input type="text" name="correct_answer">
					</p>
					<p>
						
						<input type="submit" name="submit" value="Submit">
					</p>
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