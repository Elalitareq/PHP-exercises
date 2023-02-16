<?php
$string = "I love Python, but I also love Python";
$newString = str_replace("Python", "PHP", $string);
$newString = str_replace("PHP", " PHP", $newString);
echo $newString; 

?>