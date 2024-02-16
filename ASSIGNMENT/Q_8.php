<?php

function assignGrade($score) {
    if ($score >= 90) {
        echo "Grade A";
    } elseif ($score >= 80) {
        echo "Grade B";
    } elseif ($score >= 70) {
        echo "Grade C";
    } elseif ($score >= 60) {
        echo "Grade D";
    } else {
        echo "Grade F";
    }
}
$examScore = 85;
assignGrade($examScore);

?>