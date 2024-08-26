<?php

function countAndSay(int $n) {
    
    if ($n == 1) {
        return  "1";
    }

    $prev_seq = countAndSay($n - 1);

    $result = "";

    $count = 1;
    $len = strlen($prev_seq);

    for($i = 1; $i < $len; $i++) {
        if ($prev_seq[$i] == $prev_seq[$i - 1]) {
            $count ++;
        }

        if ($prev_seq[$i] != $prev_seq[$i - 1]) {
            $result .= $count . $prev_seq[$i - 1];
            $count = 1;
        }
    }

    $result .= $count . $prev_seq[$len - 1];

    return $result;
}

echo countAndSay(5);

?>