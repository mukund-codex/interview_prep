<?php

function removeDuplicates(string $str) {

    $stack = [];

    for($i = 0; $i < strlen($str); $i++) {
        $currentChar = $str[$i];

        if (!empty($stack) && end($stack) == $currentChar) {
            array_pop($stack);
        }else {
            $stack[] = $currentChar;
        }
    }

    return implode('', $stack);
}

$s = "abbaca";
echo removeDuplicates($s);

?>