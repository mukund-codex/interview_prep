<?php

function myAtoi($str) {

    $str = trim($str);

    if (strlen($str) === 0) {
        return 0;
    }

    $sign = 1;
    $i = 0;
    $result = 0;

    if ($str[$i] === '-' || $str[$i] === '+') {
        $sign = ($str[$i] === '-') ? -1 : 1;
        $i++;
    }

    while($i < strlen($str) && ctype_digit($str[$i])) {
        $result = $result * 10 + ($str[$i] - '0');
        $i++; 
    }

    $result *= $sign;

    $intMax = 2147483647;
    $intMin = -2147483648;

    if ($result > $intMax) {
        return $intMax; // Return the maximum value for 32-bit signed integer
    } elseif ($result < $intMin) {
        return $intMin; // Return the minimum value for 32-bit signed integer
    }

    return $result; // Return the final result
}

echo myAtoi("42"); // Output: 42
echo myAtoi("   -42"); // Output: -42
echo myAtoi("4193 with words"); // Output: 4193
?>