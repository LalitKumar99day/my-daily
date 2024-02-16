<?php

function limitArticleTitleLength($title) {
    $maxTitleLength = 50;
    
    if (strlen($title) > $maxTitleLength) {
        $truncatedTitle = substr($title, 0, $maxTitleLength);
        echo $truncatedTitle . "..."; 
    } else {
        echo $title;
    }
}

$articleTitle = "This is a sample article title that exceeds 50 characters limit";
limitArticleTitleLength($articleTitle);

?>