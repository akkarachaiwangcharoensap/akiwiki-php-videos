<?php

class Student 
{
	/**
	 * Student's name
	 * @var string $name
	 */
	private $name;

	/**
	 * Student's age
	 * @var int $age
	 */
	private $age;

    public function __construct($name, $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Get student's name
     * @return string $this->name
     */
    public function myName () 
    {
        return $this->name;
    }

    /**
     * Get student's age
     * @return int $this->age
     */
    public function myAge () 
    {
        return $this->age;
    }
}        

$studentA = new Student("Aki", 21);
$studentB = new Student("Bob", 39);

echo $studentA->myName() . '<br/>';
echo $studentA->myAge() . '<br/>';

echo $studentB->myName() . '<br/>';
echo $studentB->myAge() . '<br/>';
