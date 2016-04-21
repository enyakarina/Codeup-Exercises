<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark.';

$physicistsArray = explode(', ', $physicistsString);

$last = array_pop($physicistsArray);

$famousFakePhycisits = implode(' ,', $physicistsArray) . ' and ' . $last . PHP_EOL;

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhycisits}";




