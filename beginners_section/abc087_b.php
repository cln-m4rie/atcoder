<?php
fscanf(STDIN, '%d', $a);
fscanf(STDIN, '%d', $b);
fscanf(STDIN, '%d', $c);
fscanf(STDIN, '%d', $x);

const COIN_A = 500;
const COIN_B = 100;
const COIN_C = 50;

$res = 0;
for ($i = 0; $i <= $a;$i++) {
    for ($j = 0;$j <= $b;$j++) {
        for ($k = 0;$k <= $c;$k++) {
            if (COIN_A * $i + COIN_B * $j + COIN_C * $k === $x) {
                $res++;
            }
        }
    }
}

echo $res;
