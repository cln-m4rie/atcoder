<?php
fscanf(STDIN, '%d', $n);
$arr = explode(' ', trim(fgets(STDIN)));

$maxHeight = 0;
$count = 0;
foreach ($arr as $item) {
    $currentHeight = (int) $item;
    if ($maxHeight <= $currentHeight) {
        $maxHeight = $currentHeight;
        $count++;
    }
}
echo $count;
