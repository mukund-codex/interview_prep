<?php

function romanToInt($s) {

    $roman = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    $result = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        if ($i < strlen($s) - 1 && $roman[$s[$i]] < $roman[$s[$i + 1]]) {
            $result -= $roman[$s[$i]];
        }else {
            $result += $roman[$s[$i]];
        }
    }

    return $result;
}

echo romanToInt("III") . "<br>"; // Output: 3
echo romanToInt("IV") . "<br>";  // Output: 4
echo romanToInt("IX") . "<br>";  // Output: 9

?>