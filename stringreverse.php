<?php

//String Reverse code : hello => olleh

function reverseString(string $string) {

    return strrev($string);

}

$input = "hello";
echo $input . "\n";
echo reverseString($input);