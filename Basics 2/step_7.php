<?php
$input_str = "I love Python, Python and PHP.";
$placeholder_replace = str_replace("Python", "PHOLDER", $input_str);
$php_replace = str_replace("PHP", "Python", $placeholder_replace);
$final_replace = str_replace("PHOLDER", "PHP", $php_replace);
echo $final_replace;
?>