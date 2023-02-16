<?php
function isPowerOfTwo($num) {
    if ($num < 1) {
      return false;
    }
    while ($num % 2 == 0) {
      $num /= 2;
    }
    return $num == 1;
  }
  $num = 4;
  if (isPowerOfTwo($num)) {
    echo "$num is power of 2";
  } else {
    echo "$num is not power of 2";
  }
  
?>