<?php

function count_word_occurrences($text, $word)
{
    $words = explode(' ', $text);
    $count = 0;
    $index = 0; 

    while ($index < count($words)) {
        if ($words[$index] == $word) {

            $count++; 
        }
        $index++;
    }

    return $count; 
}

$sentence = 'the life is hard lakin the life is jamila';
$word = 'the';
$count = count_word_occurrences($sentence, $word);
echo "The word '{$word}' appears {$count} times in the sentence: '{$sentence}'";
?>
