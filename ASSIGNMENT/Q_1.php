<?php
$items = array(
    'item1' => 1500,
    'item2' => 3000,
    'item3' => 2000
);
$totalPrice = array_sum($items);
if ($totalPrice > 5000) {
    $discountedPrice = $totalPrice * 0.9;
    echo "Total Price: Rs. " . $totalPrice . " with 10% discount: Rs. " . $discountedPrice;
} else {
    echo "Total Price: Rs. " . $totalPrice;
}

?>