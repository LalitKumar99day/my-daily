<?php
$numberOfSteps = 7500;
if ($numberOfSteps < 5000) {
    $fitnessLevel = 'Beginner';
} elseif ($numberOfSteps >= 5000 && $numberOfSteps <= 10000) {
    $fitnessLevel = 'Intermediate';
} else {
    $fitnessLevel = 'Advanced';
}
echo "Fitness Level: $fitnessLevel";
?>