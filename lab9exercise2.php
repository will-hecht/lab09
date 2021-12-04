<?php
	$answer1 = $_POST["question1"];
	$answer2 = $_POST["question2"];
	$answer3 = $_POST["question3"];
	$answer4 = $_POST["question4"];
	$answer5 = $_POST["question5"];

	echo "Question 1: What is the Capital of Peru?";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Your Answer: $answer1";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Correct Answer: Lima" . "<br>";

	echo "Question 2: What is the Capital of Poland?";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Your Answer: $answer2";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Correct Answer: Warsaw" . "<br>";

	echo "Question 3: What is the Capital of Mali?";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Your Answer: $answer3";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Correct Answer: Bamako" . "<br>";

	echo "Question 4: What is the Capital of Indonesia?";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Your Answer: $answer4";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Correct Answer: Jakarta" . "<br>";

	echo "Question 5: What is the Capital of Tajikistan?";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Your Answer: $answer5";
	echo "<br>";
	echo str_repeat('&nbsp;', 5) . "Correct Answer: Dushanbe" . "<br><br>";

	$score = 0;
	if($answer1 == "Lima") {
		$score++;
	}
	if($answer2 == "Warsaw") {
		$score++;
	}
	if($answer3 == "Bamako") {
		$score++;
	}
	if($answer4 == "Jakarta") {
		$score++;
	}
	if($answer5 == "Dushanbe") {
		$score++;
	}
	$percentage = 20*$score;

	echo "You answered $score correct" . "<br>";
	echo "Your score is $percentage%";

?>