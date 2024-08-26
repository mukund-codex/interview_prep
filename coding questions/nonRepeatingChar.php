<?php

function nonRepeatingChar(string $str) {

    $charFreq = [];

    for($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (isset($charFreq[$char])) {
            $charFreq[$char]++;
        }else {
            $charFreq[$char] = 1;
        }
    }

    for($i = 0; $i < strlen($str); $i++) {
        if ($charFreq[$str[$i]] == 1) {
            return $str[$i];
        }
    }

    return null;
}

echo nonRepeatingChar('mukunda');

?>