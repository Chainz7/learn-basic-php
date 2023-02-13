<?php

// ARRAY
$progammingLanguanges = ['PHP', 'JAVA', 'PYTHON'];

echo $progammingLanguanges[0];
echo '<pre>';
print_r($progammingLanguanges);
echo '</pre>';

$progammingLanguanges[] = 'C++';
echo '<pre>';
print_r($progammingLanguanges);
echo '</pre>';

array_push($progammingLanguanges, 'C#', 'GO');
echo '<pre>';
print_r($progammingLanguanges);
echo '</pre>';

$progammingLanguanges = [
    'php' => '9.0',
    'python' => '10.0'
];
echo '<pre>';
print_r($progammingLanguanges);
echo '</pre>';

$newLanguange = 'renpy';
$progammingLanguanges[$newLanguange] = '1.1';
echo '<pre>';
print_r($progammingLanguanges);
echo '</pre>';

$progammingLanguanges = [
    'unity' => [
        'creator' => 'guido',
        'extension' => true,
        'versions' => [
            [
                'version' => 3.1, 
                'releaseDate' => 'oct 5, 2020'
            ],
            [
                'version' => 3.8, 
                'releaseDate' => 'dec 5, 2022'
            ],
        ],
    ],
];
echo '<pre>';
print_r($progammingLanguanges);
echo '</pre>';
echo $progammingLanguanges['unity']['versions'][1]['releaseDate'];

var_dump(isset($progammingLanguanges[100]));

$array = ['a', 'b', 'c'];
echo array_shift($array); //delete first array
print_r($array);
unset($array[2]); //destroy array
print_r($array);