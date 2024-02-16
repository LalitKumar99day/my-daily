<?php

function getWeatherRecommendation($temperature) {
    if ($temperature > 25) {
        echo "It's a sunny day!";
    } else {
        echo "Consider taking an umbrella";
    }
}
$currentTemperature = 28;
getWeatherRecommendation($currentTemperature);

?>