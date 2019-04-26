<?php
fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%s', $s);

$res = $white = substr_count($s, '.');

// .が1つもない || 全て. || #の右側に.が存在しない場合は変更する必要ないので0を返す
if ($white === 0 || $white === $n || preg_match('/^\.*#*$/', $s)) {
    echo 0;

    return;
}

$black = 0;
for ($i = 0; $i < $n;$i++) {
    // i番目まで黒
    if ($s[$i] === '#') {
        $black++;
    } else {
        $white--;
    }
    $res = min($res, $black + $white);
}

echo $res > 0 ? $res : 0;
