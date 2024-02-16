<?php

$totalOrderAmount = 1200; 

if ($totalOrderAmount > 1000) {
    $discountMessage = "Congratulations! You qualify for a discount.";
} else {
    $discountMessage = "Sorry, your order does not qualify for a discount.";
}

echo $discountMessage;
?>