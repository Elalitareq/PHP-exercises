<?php
function isPalindrome($str) {
    $rev = strrev($str);
    if ($str == $rev) {
      return true;
    } else {
      return false;
    }
  }
  $str = "racecar";
  if (isPalindrome($str)) {
    echo "$str is a palindrome";
  } else {
    echo "$str is not a palindrome";
  }
  
?>