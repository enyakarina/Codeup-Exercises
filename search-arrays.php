<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($key, $names) 
{
    if (in_array($key, $names, true)) {
        return boolval($key);
    } else if (in_array($key, $names, false)) {
        return boolval($key);
    }
}

echo search('Mike', $names) . PHP_EOL;

function compareArrays($arrayOne, $arrayTwo)
{
  $common = 0;
  foreach($arrayOne as $person) {
    if(search($person, $arrayTwo) == true) {
        $common++;
    }
  }
  return $common;
}
echo compareArrays($names, $compare) . ' similarities between the arrays' . PHP_EOL;