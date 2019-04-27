<?php
$arr = explode(' ', fgets(STDIN));

$startTime = (int) $arr[0];
$biscuitCount = (int) $arr[1];
$endTime = ((int)$arr[2]) + 0.5;

if ($endTime < $startTime) {
    echo 0 . PHP_EOL;
    exit;
}

$diff = floor($endTime / $startTime);
echo $diff * $biscuitCount . PHP_EOL;
