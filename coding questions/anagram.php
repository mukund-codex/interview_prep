<?php

function checkAnagram(string $str1, string $str2) {

    $str1 = strtolower(str_replace(" ", '', $str1));
    $str2 = strtolower(str_replace(" ", '', $str2));

    if (strlen($str1) != strlen($str2)) {
        return false;
    }

    $strArray1 = str_split($str1);
    $strArray2 = str_split($str2);

    sort($strArray1);
    sort($strArray2);

    if ($strArray1 != $strArray2) {
        return false;
    }

    return true;
}

$str1 = 'silent';
$str2 = 'listen';

echo checkAnagram($str1, $str2) ? 'true' : 'false';

?>