<?php

$strings = ["Hello", "World", "PHP", "Programming"];
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

function reverseString($string) {
    return strrev($string);
}

function processStrings($strings) {
    foreach ($strings as $string) {
        $vowelCount = countVowels($string);
        $reversedString = reverseString($string);
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }
}

// Process the strings
processStrings($strings);
