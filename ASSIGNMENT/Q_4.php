<?php
$studentScore = 75;
if ($studentScore < 60) {
    $grade = 'F';
} elseif ($studentScore >= 60 && $studentScore <= 70) {
    $grade = 'D';
} elseif ($studentScore >= 71 && $studentScore <= 80) {
    $grade = 'C';
} elseif ($studentScore >= 81 && $studentScore <= 90) {
    $grade = 'B';
} else {
    $grade = 'A';
}
echo "Grade: $grade";
?>