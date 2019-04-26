<?php
fscanf(STDIN, '%d', $n);

$arr = [];
for ($i = 0; $i < $n;$i++) {
    fscanf(STDIN, '%d %d %d', $t, $x, $y);
    $arr[] = [$t, $x, $y];
}
$previousArray = [0, 0, 0];
foreach ($arr as $column) {
    $diffTime = abs($column[0] - $previousArray[0]);
    $diffX = abs($column[1] - $previousArray[1]);
    $diffY = abs($column[2] - $previousArray[2]);
    if ($diffTime >= $diffX + $diffY && ($diffTime - $diffX + $diffY) % 2 === 0) {
        $previousArray = $column;
    } else {
        echo 'No';
        exit;
    }
}
echo 'Yes';
