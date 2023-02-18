<?php

$transactions = array(
  array('debit' => 100, 'credit' => 50),
  array('debit' => 75, 'credit' => 100),
  array('debit' => 50, 'credit' => 50),
  array('debit' => 25, 'credit' => 40),
);

foreach ($transactions as $transaction) {
  $amount = abs($transaction['debit'] - $transaction['credit']);
  echo "Transaction amount: " . $amount . PHP_EOL;
}

?>