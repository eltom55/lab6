<?php
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];

$correctAnswers = 0;

if ($answer1 == "Khartoum")
{
    $correctAnswers++;
}
if ($answer2 == "Riyadh")
{
    $correctAnswers++;
}
if ($answer3 == "Cairo")
{
    $correctAnswers++;
}
if ($answer4 == "Doha")
{
    $correctAnswers++;
}
if ($answer5 == "Kuwait City")
{
    $correctAnswers++;
}

echo "<h3>Score:</h3>";
echo "Points: " . $correctAnswers . " / 5<br>";
echo "Percentage: " . ($correctAnswers * 20) . "%<br>";

echo "<br><h3>Answers:</h3>";
echo "Question 1: What is the capital city of Sudan?<br>";
echo "You answered: " . $answer1 . "<br>";
echo "Correct answer: Khartoum<br><br>";

echo "Question 2: What is the capital city Saudi Arabia?<br>";
echo "You answered: " . $answer2 . "<br>";
echo "Correct answer: Riyadh<br><br>";

echo "Question 3: What is the capital city of Egypt?<br>";
echo "You answered: " . $answer3 . "<br>";
echo "Correct answer: Cairo<br><br>";

echo "Question 4: What is the capital city of Qatar?<br>";
echo "You answered: " . $answer4 . "<br>";
echo "Correct answer: Doha<br><br>";

echo "Question 5: What is the capital city of Kuwait?<br>";
echo "You answered: " . $answer5 . "<br>";
echo "Correct answer: Kuwait City<br><br>";