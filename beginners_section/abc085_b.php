<?php
fscanf(STDIN, '%d', $n);
$intArr = [];
for ($i = 0;$i < $n;$i++) {
    fscanf(STDIN, '%d', $tmp);
    $intArr[] = $tmp;
}
$results = array_unique($intArr);
echo count($results);