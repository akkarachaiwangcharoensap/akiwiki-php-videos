<?php

function addFunction ($a, $b) {
    return $a + $b;
}

$myNumberA = 4;
$myNumberB = 6;

echo addFunction($myNumberA, $myNumberB) . '<br/>';

# Pass by reference example!
function tryToModifyArgument ($a, $b) {
    $a = 25;
    $b = 12;
}

tryToModifyArgument($myNumberA, $myNumberB);

echo $myNumberA . '<br/>';
echo $myNumberB . '<br/>';

echo '======================' . '<br/>';

# Pass by value example!
class FooClass {
	public $myNumberA = 4;
	public $myNumberB = 6;
}

function tryToModifyArugment (FooClass $obj) {
	$obj->myNumberA = 25;
	$obj->myNumberB = 12;
}

$foo = new FooClass();

tryToModifyArugment($foo);

echo $foo->myNumberA . '<br/>';
echo $foo->myNumberB . '<br/>';