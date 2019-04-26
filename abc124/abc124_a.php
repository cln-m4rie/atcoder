<?php
fscanf(STDIN, '%d %d', $a, $b);

$result = 0;
for ($i = 0; $i < 2; $i++) {
    if ($a >= $b) {
        $result += $a;
        $a--;
    } else {
        $result += $b;
        $b--;
    }
}

echo $result;