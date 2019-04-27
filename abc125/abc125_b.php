<?php
fscanf(STDIN, '%d', $n);

$vArr = explode(' ', fgets(STDIN));
$cArr = explode(' ', fgets(STDIN));

$ans = 0;

for ($i = 0;$i < $n;$i++) {
    if (((int)$vArr[$i] <=> (int)$cArr[$i]) < 0) {
        continue;
    }
    $ans += (int) $vArr[$i] - (int)$cArr[$i];
}

echo $ans .PHP_EOL;