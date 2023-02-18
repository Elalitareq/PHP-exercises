<?php

function sum_of_digits($number) {
  $string_number = (string) $number;
  $sum = 0; 

  for ($i = 0; $i < strlen($string_number); $i++) {
    $sum += $string_number[$i]; 
  }

  return $sum; 
}

$number = 12345;
$sum = sum_of_digits($number);
echo "The sum of the digits of {$number} is {$sum}";

?>