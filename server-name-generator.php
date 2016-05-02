<?php

$adjectives = array('Amazing', 'Awesome', 'Repulsive', 'Disgusting', 'Fat', 'Sweet', 'Transparent', 'Chivalrous', 'Wacky', 'Macabre');
$nouns = array('Dog', 'Village', 'Valley', 'Map', 'Planetoid', 'Alien', 'Panda', 'Cup', 'Castle', 'Sword');
$randomNoun = $nouns[array_rand($nouns, 1)];
$randomAdjectives = $adjectives[array_rand($adjectives, 1)];

?>

<!DOCTYPE html>
<html>
<head>  
    <title>Server Name Generator</title>
</head>
<body>
    <h1>Random Server Name!</h1>
        <p>
            <?= "{$randomAdjectives} {$randomNoun}" . PHP_EOL; ?>
            <button>Randomize!</button>
        </p>
</body>
</html>