<?php
fscanf(STDIN, '%d %d %d', $n, $a, $b);

$res = 0;
for ($i = 1;$i <= $n;$i++) {
    if ($i >= 10) {
        // 正規表現で配列に分割
        preg_match_all('([0-9])', (string)$i, $tmp);
        // 配列の中身(数値)の総和を求める
        $tmp = array_sum($tmp[0]);

        // a <= 配列の総和 <= b
        if (($a <=> $tmp) * ($b <=> $tmp) <= 0) {
            $res += $i;
        }
    } else {
        // a <= i <= b
        if (($a <=> $i) * ($b <=> $i) <= 0) {
            $res += $i;
        }
    }
}

echo $res;
