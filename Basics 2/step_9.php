<?php
$num = 16;
$sqrt = sqrt($num);
echo $sqrt."\n";
// this function i created using recursion it keeps going until the difference is < 0.0001
// function squareRoot($number, $guess = null) {
//     if ($guess === null) {
//       $guess = $number / 2;
//     }
  
//     $nextGuess = ($guess + $number / $guess) / 2;
  
//     if (abs($nextGuess - $guess) < 0.0001) {
//       return $nextGuess;
//     }
  
//     return squareRoot($number, $nextGuess);
//   }
//   echo squareRoot(25);
?>