<?php

/* Data Types */

# 4 Scalar Types 
# bool - true / false
$completed = true;
# int - 1, 2, 3, 0, -5 
$score = 75;
# float - 1.5, 2.5
$price = 0.99;
# string
$greeting = 'hello';

echo $completed . "<br />";
echo $score . "<br />";
echo $price . "<br />";
echo $greeting . "<br />";

var_dump($completed);
var_dump($score);
var_dump($price);
var_dump($greeting);

# 4 Compound Types
# array -
$companies = [1, 2, 3, 0.5, -9.2, 'A', 'B', true];
print_r($companies);
# object - 
# callable - 
# iterable - 

#2 Special Types
# resource
# null

function sum($x, $y)
{
    return $x + $y;
}

echo sum(2, 3);

$a = (int) '5';

var_dump($a);
