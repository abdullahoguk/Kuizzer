<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
	//check score is set
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

	if ($_POST) {
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;

//get total number of questions
		$query = "SELECT * FROM questions";
		$result = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
		$total = $result->num_rows;


//get correct answer
		$query = "SELECT * FROM choices
			WHERE question_number = $number AND is_correct = 1";

		//get result
		$result = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
		$row = mysqli_fetch_assoc($result);
		$correct_answer = $row['id'];

		if ($selected_choice == $correct_answer) {
			$_SESSION['score']++;
		}


		if ($number == $total) {
			header("Location: final.php");
		} else{
			header("Location: question.php?n=".$next);

		}


	}

 ?>