<?php

function humanizedList($array)
{
    $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark.';

    $array = explode(', ', $physicistsString);

    $last = array_pop($array);

    sort($array);

   return implode(' ,', $array) . ' and ' . $last . PHP_EOL;
}

$famousFakePhycisits = humanizedList($physicistsString);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhycisits}";
