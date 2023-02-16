

<?php
$grocery = array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');

$first_three = array_slice($grocery, 0, 3);
$last_item = end($grocery);

echo "Hello Sir, do you have " . implode(', ', $first_three) . "? Also if you sell fruits can I find a $last_item?<br/>";
?>
<?php
$grocery_items = array(
    'eggs' => array('balade', 'mazere3'),
    'milk' => array('Fresh', 'Taanayel'),
    'water-pack' => array('Tanoureen', 'Reem')
);

// Output the sentence using array values
echo "Hey Sir, Please I need 1 pack of {$grocery_items['eggs'][0]} eggs and 3 {$grocery_items['water-pack'][1]} Water Pack.";
?>