<?php
function isArmstrong($number) {
    $numStr = (string)$number;
    $numLength = strlen($numStr);
    $sum = 0;
    for ($i = 0; $i < $numLength; $i++) {
      $digit = (int)$numStr[$i];
      $sum += $digit ** $numLength;
    }
    return $sum === $number;
  }
  
  echo isArmstrong(153) ? "true<br>" : "false<br>"; 
  echo isArmstrong(370) ? "true<br>" : "false<br>"; 
  echo isArmstrong(371) ? "true<br>" : "false<br>"; 
  echo isArmstrong(9474) ? "true<br>" : "false<br>"; 
  echo isArmstrong(9475) ? "true<br>" : "false<br>"; 
  
?>