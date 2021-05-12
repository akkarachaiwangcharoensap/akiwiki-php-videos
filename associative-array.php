<?php

/**
 * =====================
 * | Associative Array |
 * =====================
 */
$associativeArray = array(
	'key1' => 'value1',
	'key2' => 123,
	'key3' => true
);

$anotherAssociativeArray = [
	'key1' => 'anotherValue1',
	'key2' => 456,
	'key3' => false
];

echo '===================================' . '<br/>';

// Accessing an element based on the given key
echo $associativeArray['key1'] . '</br>';

// Creating a new key and assigning its value.
$associativeArray['newKey'] = 'new value';

// Removing an element at a specific key from the array
unset($associativeArray['key2']);

echo '===================================' . '<br/>';

echo 'New modified list: ' . '<br/>';

echo '<pre>', print_r($associativeArray, 1), '</pre>';
echo '<pre>', print_r($anotherAssociativeArray, 1), '</pre>';
