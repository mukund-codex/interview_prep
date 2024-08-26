<?php

function rotation(string $s1, string $s2) {

    if (strlen($s1) != strlen($s2) && strlen($s1) <= 0) {
        return false;
    }

    $s1s1 = $s1 . $s1;
    return strpos($s1s1, $s2) !== false;

}

$s1 = "abcde";
$s2 = "cdeab";

if (rotation($s1, $s2)) {
    echo $s2 . " is rotation of " . $s1;
}else {
    echo $s2 . " is not a rotation of " . $s1;
}

?>