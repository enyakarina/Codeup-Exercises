<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark.';

$physicistsArray = explode(', ', $physicistsString);

function humanizedList($array, $sort = false)
{
    if ($sort) {
        sort($array);
    }

    $last = array_pop($array);

    return implode(' ,', $array) . ' and ' . $last . PHP_EOL;
}

$famousFakePhycisits = humanizedList($physicistsArray, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhycisits}";