<?php

/**
 * =============
 * |   Array   |
 * =============
 */
$array = array("fooListItem", 123, true);
$anotherArray = ["anotherFooListItem", 456, false];

echo '===================================' . '<br/>';

// Accessing an element based on given index
// Array index starts at 0.
// So, we are accessing the "second" item.
print($array[1] . '</br>');

// Adding a new element to the array
array_push($array, 'hello world');

// Removing an element at a specific index from the array
array_splice($array, 0, 1);

echo '===================================' . '<br/>';

echo 'New modified list: ' . '<br/>';
echo '<pre>', print_r($array, 1), '</pre>';
echo '<pre>', print_r($anotherArray, 1), '</pre>';
