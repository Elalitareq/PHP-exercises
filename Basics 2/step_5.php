<?php
function wordToDigit($word) {
    switch ($word) {
      case "zero":
        return 0;
        break;
      case "one":
        return 1;
        break;
      case "two":
        return 2;
        break;
      case "three":
        return 3;
        break;
      case "four":
        return 4;
        break;
      case "five":
        return 5;
        break;
      case "six":
        return 6;
        break;
      case "seven":
        return 7;
        break;
      case "eight":
        return 8;
        break;
      case "nine":
        return 9;
        break;
      default:
        return "Invalid word";
    }
  }
  
  echo wordToDigit("zero")."<br>"; 
  echo wordToDigit("one")."<br>"; 
  echo wordToDigit("five")."<br>"; 
  echo wordToDigit("eleven")."<br>"; 
  
?>