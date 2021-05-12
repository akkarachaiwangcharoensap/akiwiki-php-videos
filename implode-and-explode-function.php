<?php

// Imploding
$data = array('ItemA', 'ItemB', 'ItemC', 'ItemD');

$joiningStringWithWhitespace = implode(' ', $data);
$joiningStringWithComma = implode(',', $data);
$joiningStringWithDash = implode('-', $data);

echo $joiningStringWithWhitespace . '<br/>';
echo $joiningStringWithComma . '<br/>';
echo $joiningStringWithDash . '<br/>';

// Exploding
$string = 'Hello, I am Aki! How are you doing?';

$breakingByComma = explode(',', $string);
$breakingByExclaimation = explode('!', $string);
$breakingByWhitespace = explode(' ', $string);

echo '<pre>' . print_r($breakingByComma, 1) . '</pre>';
echo '<pre>' . print_r($breakingByExclaimation, 1) . '</pre>';
echo '<pre>' . print_r($breakingByWhitespace, 1) . '</pre>';


