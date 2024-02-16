<?php

$storedUsername = "example_user";
$storedPassword = "example_password";
$userSubmittedUsername = $_POST; 
$userSubmittedPassword = $_POST;

if ($userSubmittedUsername == $storedUsername && $userSubmittedPassword == $storedPassword) 
{
    echo "Login successful";
} else 
{
    echo "Invalid credentials";
}
?>