<?php
$side1 = readline("Enter the length of the first adjacent side: ");
$side2 = readline("Enter the length of the second adjacent side: ");
$diagonal = readline("Enter the length of the diagonal: ");
if ($side1 == $side2 && $diagonal**2 == 2*$side1**2) {
  echo "The parallelogram is a square.";
}
elseif ($side1 == $side2) {
  echo "The parallelogram is a rhombus.";
}
elseif ($diagonal**2 == $side1**2 + $side2**2) {
  echo "The parallelogram is a rectangle.";
}
else {
  echo "The parallelogram is neither a rectangle nor a rhombus.";
}
?> 