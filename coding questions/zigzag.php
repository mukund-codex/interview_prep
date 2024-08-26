<?php

function convertToZigZag($str, $numRows) {

    if ($numRows == 1) {
        return $str;
    }

    $rows = array_fill(0, min($numRows, strlen($str)), "");

    $curRow = 0;
    $goingDown = false;

    for($i = 0; $i < strlen($str); $i++) {
        $rows[$curRow] .= $str[$i];

        if ($curRow == 0 || $curRow == $numRows - 1) {
            $goingDown = !$goingDown;
        }

        $curRow += $goingDown ? 1 : -1;
    }

    return implode("", $rows);
}

$str = "PAYPALISHIRING";
$numRows = 3;
echo convertToZigZag($str, $numRows);

?>