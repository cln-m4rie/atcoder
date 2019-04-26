<?php
fscanf(STDIN, '%d', $n);
$arr = explode(' ', fgets(STDIN));

foreach ($arr as $item) {
    $intArr[] = (int) $item;
}
rsort($intArr);
$alice = [];
$bob = [];
foreach ($intArr as $key => $item) {
    if ($key % 2 === 0) {
        $alice[] = $item;
    } else {
        $bob[] = $item;
    }
}
echo array_sum($alice) - array_sum($bob);