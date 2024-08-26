<?php

function findPalindromicSubstrings($s) {
    $result = [];
    $n = strlen($s);

    // Function to expand around center and find palindromes
    function expandAroundCenter($s, $left, $right, &$result) {
        while ($left >= 0 && $right < strlen($s) && $s[$left] == $s[$right]) {
            $result[] = substr($s, $left, $right - $left + 1);
            $left--;
            $right++;
        }
    }

    // Loop through each character in the string
    for ($i = 0; $i < $n; $i++) {
        // Odd length palindromes (centered at $i)
        expandAroundCenter($s, $i, $i, $result);
        
        // Even length palindromes (centered between $i and $i+1)
        expandAroundCenter($s, $i, $i + 1, $result);
    }

    // Sort result by the order of appearance in the string
    usort($result, function($a, $b) use ($s) {
        return strpos($s, $a) - strpos($s, $b);
    });

    return $result;
}

// Example usage
$s = "aaa";
$palindromicSubstrings = findPalindromicSubstrings($s);
print_r($palindromicSubstrings);

?>
