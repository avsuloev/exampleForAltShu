<?php
// todo: replace this with an actual task
function sum($numbers)
{
    // initialize the variable we will return
    $sum = 0;

    // sum up the numbers
    foreach ($numbers as $number) {
        $sum += $number;
    }

    // return the sum to the user
    return $sum;
}

?>
