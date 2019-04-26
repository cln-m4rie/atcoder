<?php
$s = trim(fgets(STDIN));
$tArr = ['dreamer', 'eraser', 'dream', 'erase'];
$tmpStr = $s;
foreach ($tArr as $t) {
    $tmpStr = str_replace($t, '', $tmpStr);
}
if (strlen($tmpStr) === 0) {
    echo 'YES';
    exit;
}
rsort($tArr);
$tmpStr = $s;
foreach ($tArr as $t) {
    $tmpStr = str_replace($t, '', $tmpStr);
}
if (strlen($tmpStr) === 0) {
    echo 'YES';
    exit;
}
echo 'NO';
