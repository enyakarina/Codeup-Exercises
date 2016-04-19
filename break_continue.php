<?php
echo "Even numbers between 1-100: \n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "{$i}\n";
}

echo "Numbers 1-100, but stopping at 10: \n";
for ($i = 1; $i <= 100; $i++) {
    echo "{$i}\n";
    if ($i == 10) {
        break;
    }
}