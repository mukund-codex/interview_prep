<?php

function longestPalindrome($str) {
    $strlen = strlen($str);
    if ($strlen == 0) return "";

    $start = 0; 
    $maxLength = 1;

    // Create a 2D array to store whether a substring is a palindrome
    $dp = array_fill(0, $strlen, array_fill(0, $strlen, false));

    // Every single character is a palindrome of length 1
    for ($i = 0; $i < $strlen; ++$i) {
        $dp[$i][$i] = true;
    }

    // Check for palindromes of length 2
    for ($i = 0; $i < $strlen - 1; ++$i) {
        if ($str[$i] == $str[$i + 1]) {
            $dp[$i][$i + 1] = true;
            $start = $i;
            $maxLength = 2;
        }
    }

    // Check for palindromes of length 3 and greater
    for ($length = 3; $length <= $strlen; ++$length) {
        for ($i = 0; $i < $strlen - $length + 1; ++$i) {
            $j = $i + $length - 1;

            // Checking for substring from i to j
            if ($str[$i] == $str[$j] && $dp[$i + 1][$j - 1]) {
                $dp[$i][$j] = true;
                $start = $i;
                $maxLength = $length;
            }
        }
    }

    // Return the longest palindrome substring
    return substr($str, $start, $maxLength);
}

echo longestPalindrome('babad');

?>