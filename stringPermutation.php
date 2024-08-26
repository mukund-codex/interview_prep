<?php

function swap($str, $i, $j) {
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
    return $str;
}

function permute($str, $l, $r, &$result) {
    if ($l == $r) {
        $result[] = $str;
    }

    for($i = $l; $i <= $r; $i++) {
        $str = swap($str, $l, $i);
        permute($str, $l + 1, $r, $result);
        $str = swap($str, $l, $i);
    }
}

$string = 'abcd';
$result = [];
$len = strlen($string);
permute($string, 0, $len -1, $result);
print_r($result);

?>