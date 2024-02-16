<?php

function displayWelcomeMessage($accountType) {
    if ($accountType === 'premium') {
        echo "Welcome Premium User!";
    } else {
        echo "Welcome Basic User!";
    }
}
$userAccountType = 'premium';
displayWelcomeMessage($userAccountType);

?>