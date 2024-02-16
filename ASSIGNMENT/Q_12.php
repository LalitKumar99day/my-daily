<?php

function offerTrialPeriod($userId, $subscribedUsers) {
    if (!in_array($userId, $subscribedUsers)) {
        echo "Welcome to our service! You are eligible for a trial period.";
    } else {
        echo "Welcome back! Choose a subscription plan to continue.";
    }
}
$userId = 123; 
$subscribedUsers = [456, 789]; 

offerTrialPeriod($userId, $subscribedUsers);

?>