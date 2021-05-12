<?php

interface Stomach 
{
    /**
     * Eat food
     *
     * @param string $food
     * @return void
     */
    public function eat($food);
}

class Person implements Stomach
{
    public function __construct($name, $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function myName () 
    {
        return $this->name;
    }

    public function myAge () 
    {
        return $this->age;
    }

    /**
     * @interface Stomach
     *
     * Eat food
     *
     * @param string $food
     * @return void
     */
    public function eat ($food)
    {
        echo 'I am ' . $this->myName() . ' and I am eating: ' . $food . '<br/>';
    }
}

class Student extends Person
{
    public function __construct($name, $age, $gpa) 
    {
        // calling parent's constructor function
        parent::__construct($name, $age);

        $this->gpa = gpa;
    }

    public function myGPA () 
    {
        return $this->gpa;
    }
}

class Teacher extends Person 
{
    public function __construct($name, $age, $reviews) 
    {
        // calling parent's constructor function
        parent::__construct($name, $age);

        $this->reviews = reviews;
    }

    public function myReviewScore () 
    {
        return $this->reviews;
    }
}

$aki = new Student("Aki", 21, 2);
$bob = new Teacher("Bob", 39, 4.5);

echo $aki->myName() . '<br/>';
echo $aki->myAge() . '<br/>';
echo $aki->myGPA() . '<br/>';

echo $bob->myName() . '<br/>';
echo $bob->myAge() . '<br/>';
echo $bob->myReviewScore() . '<br/>';

echo $aki->eat('Spaghetti');
echo $bob->eat('Burgers');

