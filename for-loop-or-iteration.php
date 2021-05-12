<?php

// error_reporting(-1);

// Looping through each element
$items = ["itemA", 123, false];

foreach ($items as $item) {
    echo $item . '<br/>';
}

echo "=============================" . '<br/>';

// Looping through each element via index
for ($index = 0; $index < count($items); $index++) {
    echo $items[$index] . '<br/>';
}

echo "=============================" . '<br/>';

// Breaking a loop
foreach ($items as $item) {
    if ($item == 123) {
        break;
    }

    echo $item . '<br/>';
}

echo "=============================" . '<br/>';

// Ignoring or skipping a loop
foreach ($items as $item) {
    if ($item == "itemA") {
        continue;
    }

    echo $item . '<br/>';
}

echo "=============================" . '<br/>';

// Loop 4 times
for ($i = 0; $i < 4; $i++) {
    echo $i . '<br/>';
}

echo "=============================" . '<br/>';

// Loop at a specific point
for ($index = 24; $index < 68; $index++) {
    echo $index . '<br/>';
}

echo "=== ELEMENT FINDER ====" . '<br/>';
$inventory = ["itemA", "sword", "bow", "arrows"];

foreach ($inventory as $item) {
    if ($item == 'sword') {
        echo 'Sword is found!' . '<br/>';
        break;
    }
}

$listOfIntegers = [0,2,631,1231,52,123,-5215,25,-12312,81231,9999,-123123];

echo "=== MIN ===" . '<br/>';

$smallest = $listOfIntegers[0];

foreach ($listOfIntegers as $integer) {
    if ($smallest > $integer) {
        $smallest = $integer;
    }
}

echo "The smallest integer is " . $smallest . '<br/>';

echo "=== MAX ===" . '<br/>';
$largest = $listOfIntegers[0];

foreach ($listOfIntegers as $integer) {
    if ($largest < $integer) {
        $largest = $integer;
    }
}

echo "The largest integer is "  . $largest . '<br/>';















