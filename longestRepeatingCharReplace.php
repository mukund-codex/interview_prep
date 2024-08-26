<?php

function charReplacement(string $str, int $k) {
    $maxlength = 0;
    $start = 0;
    $charCount = [];
    $maxCount = 0;


    for ($end = 0; $end < strlen($str); $end++) {
        $char = $str[$end];

        if (!isset($charCount[$char])) {
            $charCount[$char] = 0;
        }

        $charCount[$char]++;

        $maxCount = max($maxCount, $charCount[$char]);

        if (($end - $start - 1) - $maxCount > $k) {
            $charCount[$str[$start]]--;
            $start++;
        }

        $maxlength = max($maxlength, $end - $start + 1);
    }

    return $maxlength;
}

echo charReplacement('ABAB', 2);

?>