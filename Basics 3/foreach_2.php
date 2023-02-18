<?php

$users = array(
  array('id' => 1, 'name' => 'Tareq El-Ali', 'email' => 'elalitareq@gmail.com'),
  array('id' => 2, 'name' => 'Zein El-Ali', 'email' => 'elalizein@gmail.com'),
  array('id' => 3, 'name' => 'Sameer Batata', 'email' => 'sameer.batata@gmail.com'),
);

foreach ($users as $user) {
  echo "User ID: " . $user['id'] . PHP_EOL;
  echo "Name: " . $user['name'] . PHP_EOL;
  echo "Email: " . $user['email'] . PHP_EOL;
  echo PHP_EOL;
}

?>
