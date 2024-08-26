<?php

function lengthOfLongestSubstring(string $str) {
    $len = strlen($str);
    $maxlength = 0;
    $charIndexMap = [];
    $start = 0;

    for($end = 0; $end < $len; $end ++) {
        $char = $str[$end];

        if (isset($charIndexMap[$char])) {
            $start = max($start, $charIndexMap[$char] + 1);
        }

        $charIndexMap[$char] = $end;
        $maxlength = max($maxlength, $end - $start + 1);
    }

    return $maxlength;
}

echo lengthOfLongestSubstring('abcabcbb');

?>