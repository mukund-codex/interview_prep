<?php

function isPallindrome(string $string) {

    $reversedString = strrev($string);

    return $string === $reversedString;

}

$input1 = 'racecar';
$input2 = 'hello';

echo isPallindrome($input1) ? 'true' : 'false';
echo "\n";
echo isPallindrome($input2) ? 'true' : 'false';

?>