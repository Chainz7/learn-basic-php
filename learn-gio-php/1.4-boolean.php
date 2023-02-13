<?php

/** BOOLEAN */

$isComplete = '';

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '@' = false
// [] = false
// null = false

echo $isComplete;

if ($isComplete) {
    //do something 
    echo "</br> success";
} else {
    //do something else
    echo "</br> fail";
}
