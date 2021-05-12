<?php

// 2 types of function, a void function and a returnable function
function voidFunction () {
	echo 'void function' . '<br/>';
}

function integerFunction () {
    return 123;
}

function floatFunction () {
    return 3.14;
}

function stringFunction () {
    return "Aki";
}

voidFunction();

echo integerFunction() . '<br/>';
echo floatFunction() . '<br/>';
echo stringFunction() . '<br/>';
