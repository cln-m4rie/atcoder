<?php
fscanf(STDIN, '%s', $s);

$ans = strlen($s);

if ($ans <= 1) {
    echo 0;
    exit;
}

for ($i = 0;$i < 2; $i++) {
    $cnt = 0;
    for ($j = 0;$j < strlen($s);$j++) {
        // 0, 2, 4, 6, ...が$iではない時は変える必要がある
        if ($j % 2 === 0 && $s[$j] !== (string)$i) {
            $cnt++;
        }
        // 1, 3, 5, 7, ...が$iの時は変える必要がある
        if ($j % 2 === 1 && $s[$j] === (string)$i) {
            $cnt++;
        }
    }
    $ans = min($ans, $cnt);
}
echo $ans . PHP_EOL;
