<?php

if ($argc == 1) {
    fwrite(STDOUT, "Please enter a min number and max number as arguments to continue.");
    exit;
}

$max = $argv[2];

for ($min = $argv[1]; $min <= $max; $min++) {
    echo "The number is: {$min}\n";
}

