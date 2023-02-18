<?php

function check_parallelogram($side1, $side2, $diagonal)
{
    if ($side1 == $side2 && $diagonal ** 2 == 2 * $side1 ** 2) {
        return 'rectangle';
    } elseif ($side1 == $side2) {
        return 'rhombus';
    } else {
        return 'neither';
    }
}

$side1 = 5;
$side2 = 5;
$diagonal = 7.071;
$type = check_parallelogram($side1, $side2, $diagonal);
echo "The parallelogram with sides {$side1} and {$side2} and diagonal {$diagonal} is a {$type}";

?>
<?php
// //this one takes input from the CLI
// $side1 = readline("Enter the length of the first adjacent side: ");
// $side2 = readline("Enter the length of the second adjacent side: ");
// $diagonal = readline("Enter the length of the diagonal: ");
// if ($side1 == $side2 && $diagonal**2 == 2*$side1**2) {
//   echo "The parallelogram is a square.";
// }
// elseif ($side1 == $side2) {
//   echo "The parallelogram is a rhombus.";
// }
// elseif ($diagonal**2 == $side1**2 + $side2**2) {
//   echo "The parallelogram is a rectangle.";
// }
// else {
//   echo "The parallelogram is neither a rectangle nor a rhombus.";
// }
?>
