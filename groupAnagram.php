<?php

function groupAnagram(array $strs) {

    if (empty($strs)) {
        return [];
    }

    $anagrams = [];

    foreach($strs as $str) {
        $sortedStr = str_split($str);
        sort($sortedStr);
        $sortedStr = implode("", $sortedStr);

        if (!isset($anagrams[$sortedStr])) {
            $anagrams[$sortedStr] = [];
        }

        $anagrams[$sortedStr][] = $str;
    }

    return array_values($anagrams);
}


$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
print_r(groupAnagram($strs));

?>