<?php

function isValid(string $s) {

    $stack = [];
    $map = [')' => '(', '}' => '{', ']' => '['];

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];  // Get the current character from the string

        if (isset($map[$char])) {
            // If the character is a closing bracket
            $topElement = empty($stack) ? '#' : array_pop($stack);  // Pop the top element from the stack or use a dummy value

            // Check if the popped element matches the corresponding opening bracket
            if ($topElement !== $map[$char]) {
                return false;  // If not, the string is not valid
            }
        } else {
            // If the character is an opening bracket, push it onto the stack
            $stack[] = $char;
        }
    }

    // If the stack is empty, all brackets were matched correctly
    return empty($stack);

}

$s = "(){}[]";
echo isValid($s) ? 'true' : 'false';

?>