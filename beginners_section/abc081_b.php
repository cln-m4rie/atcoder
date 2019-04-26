<?php
fscanf(STDIN, '%d', $n);
$arr = explode(' ', fgets(STDIN));
$enableCount = 0;
$allEven = true;
while ($allEven) {
    for ($j = 0;$j < $n;$j++) {
        $num = (int)$arr[$j];
        $arr[$j] = $num / 2;
        if ($num % 2 !== 0) {
            $allEven = false;
            break;
        }
    }
    if ($allEven) {
        $enableCount++;
    }
}

echo $enableCount;
