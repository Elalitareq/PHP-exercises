<?php
function isPrime($num) {
  if ($num == 1) {
    return false;
  }
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}
$num = 7;
if (isPrime($num)) {
  echo "$num is a prime number";
} else {
  echo "$num is not a prime number";
}

  
?>