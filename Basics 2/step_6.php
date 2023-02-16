<?php
function sumDigits($num) {
    $sum = 0;
    $len = strlen($num);
    for ($i = 0; $i < $len; $i++) {
      $sum += $num[$i];
    }
    return $sum;
  }
  $num = "54321";
  echo sumDigits($num); 
?>