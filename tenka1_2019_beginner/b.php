<?php
fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%s', $s);
fscanf(STDIN, '%d', $k);

$result = '';
$target = substr($s, $k - 1, 1);
for ($i = 0; $i < $n; $i++) {
    $result .= ($s[$i] === $target) ? $s[$i] : '*';
}

echo $result;
