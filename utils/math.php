<?php
function gcd(array $list)
{
    $c = count($list);
    if ($c === 0) {
        return 0;
    } elseif ($c === 1) {
        return $list[0];
    }

    return calcGCD($list);
}
function calcGCD(array &$list)
{
    $c = count($list);

    $v = $list[$c - 1] % $list[$c - 2];
    if ($v === 0) {
        if ($c === 2) {
            return $list[$c - 2];
        }

        array_pop($list);

        return calcGCD($list);
    }
    $list[$c - 1] = $list[$c - 2];
    $list[$c - 2] = $v;

    return calcGCD($list);
}