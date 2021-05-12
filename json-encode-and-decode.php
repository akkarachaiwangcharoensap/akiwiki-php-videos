<?php

// Json encode
$arrayData = array(
	'products' => array(
		array(
			'name' => 'Product A',
			'price' => 123.456
		),
		array(
			'name' => 'Product B',
			'price' => 456.123
		),
		array(
			'name' => 'Product C',
			'price' => 987.123
		),
	)
);

$objData = new stdClass();
$objData->id = 1;
$objData->name = 'Product A';
$objData->description = 'Product A Description';
$objData->price = 92324.2;

// Convert the array into JSON string.
$arrayString = json_encode($arrayData);
$objString = json_encode($objData);

echo '<pre>' . print_r($arrayString, 1) . '</pre>';
echo '<pre>' . print_r($objString, 1) . '</pre>';

$jsonString = '{"products":[{"name":"Product A","price":123.4560000000000030695446184836328029632568359375},{"name":"Product B","price":456.12299999999999045030563138425350189208984375},{"name":"Product C","price":987.12300000000004729372449219226837158203125}]}';

// Convert the json string into a PHP std object.
$decode = json_decode($jsonString);
echo '<pre>' . print_r($decode, 1) . '</pre>';