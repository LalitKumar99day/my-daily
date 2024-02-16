<?php

function calculateUserScore($userAnswers, $correctAnswers) {
    $correctCount = 0;

    foreach ($userAnswers as $questionNumber => $userAnswer) {
        if (isset($correctAnswers[$questionNumber]) && $userAnswer === $correctAnswers[$questionNumber]) {
            $correctCount++;
        }
    }

    return $correctCount;
}
$userAnswers = [1 => 'A', 2 => 'B', 3 => 'C']; 
$correctAnswers = [1 => 'A', 2 => 'B', 3 => 'C']; 

$userScore = calculateUserScore($userAnswers, $correctAnswers);
echo "Your score: " . $userScore;

?>