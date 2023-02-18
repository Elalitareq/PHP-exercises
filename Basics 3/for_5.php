<?php

$sentence = 'The quick brown fox jumps over the lazy dog';
$words = explode(' ', $sentence);
$reversed_sentence = '';

for ($i = count($words) - 1; $i >= 0; $i--) {
    $reversed_sentence .= $words[$i];
    if ($i > 0) {
        $reversed_sentence .= ' ';
    }
}

echo $reversed_sentence;

?>
