<?php
//Create a do-while loop that will count by 2's starting with 0 and ending at 100. Follow each number with a newline.
$num = 0;

do {
    echo "{$num}" . PHP_EOL;
    $num += 2;
} while ($num <= 100);

//Alter your loop to count backwards by 5's from 100 to -10.
$number = 100;

do {
    echo "{$number}" . PHP_EOL;
    $number -= 5;
} while ($number >= -10);

//Create a do-while loop that starts at 2, and displays the result $a * $a on each line while $a is less than 1,000,000. Output should equal:
$a = 2;

do {
    echo "{$a}" . PHP_EOL;
    $a *= $a;
} while ($a <= 1000000);