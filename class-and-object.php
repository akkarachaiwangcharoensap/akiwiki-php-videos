<?php

class ExampleClassA { 
    public function foo () {
        echo "foo function()" . '<br/>';
    }
}

class ExampleClassB {
    public function boo () {
        echo "boo function()" . '<br/>';
    }
}
        
$exampleClassAObject = new ExampleClassA();
$exampleClassBObject = new ExampleClassB();

$exampleClassAObject->foo();
$exampleClassBObject->boo();
