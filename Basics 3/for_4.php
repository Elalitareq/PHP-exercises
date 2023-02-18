<?php
$rows = 7;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        if ($i == 0 || $i == $rows - 1) {
            echo '*';
        } elseif ($i + $j == $rows - 1) {
            echo '*';
        } else {
            echo ' ';
        }
    }
    echo PHP_EOL;
}
?>
