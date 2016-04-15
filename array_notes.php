<?php

//for every single array, make sure they are either
//numerically indexed, or associative.
//make sure all keys are one type or another

$names = [
    'niki',
    'micah',
    'zach',
    'lorena',
    'raj',
    111,
    123,
    [
        'will',
        'mauro',
        'jerod'
    ]
];

$cohorts = array(
    'arches',
    'badlands',
    'etc',
    'ike',
    'joshua'
);

$student = [
    'first_name' => 'andrew',
    'last_name' => 'powell-morse'
];

echo $student['first_name'];
$key = 'last_name';
echo $student[$key];

var_dump($student);

//RELIABLE//
var_dump($names);

//#######GOOD FOR PRINTING OUT ARRAYS!!#######//
print_r($names);