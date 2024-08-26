<?php

function compression(string $str) {

    $compressed = '';
    $count = 1;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($i + 1 < strlen($str) && $str[$i] == $str[$i + 1]) {
            $count++;
        }else {
            $compressed .= $str[$i] . $count;
            $count = 1;
        }
    }

    return strlen($compressed) < strlen($str) ? $compressed : $str;
}

echo compression('aabcccccaaa');

?>