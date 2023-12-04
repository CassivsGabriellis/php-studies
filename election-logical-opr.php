<?php

$age = 17;
$isCitizen = true;
$isResident = true;
$isRegistered = false;

if ($age >= 18 && $isCitizen && $isResident) {
    if ($isRegistered) {
        echo "Congratulations! You are eligible to vote.";
    } else {
        echo "You are eligible to vote, but please register to cast your vote.";
    }
} else {
    echo "Sorry, you are not eligible to vote.";
}

?>
