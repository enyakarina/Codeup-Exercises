<?php

if ($argc == 1) {
    fwrite(STDOUT, "Please enter a min number and max number as arguments to continue.");
    exit;
}

fwrite(STDOUT, "What would you like to increment the numbers by?\n");
$increment = fgets(STDIN);

$max = $argv[2];

for ($min = $argv[1]; $min <= $max; $min +=$increment) {
    echo "The number is: {$min}\n";
}

