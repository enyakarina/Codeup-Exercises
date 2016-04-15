<?php

$number = 10;

$number *= 3;

echo ($number) . PHP_EOL;

$item1 = 5;

echo($item1) . PHP_EOL;

$item2 = &$item1;

$item1 = 3;

echo($item2). PHP_EOL;
