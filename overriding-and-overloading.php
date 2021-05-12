<?php

class Person 
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
}

class Student extends Person 
{
    public function __construct($name, $age, $gpa) 
    {
        // calling parent's constructor function
        parent::__construct($name, $age);

        $this->gpa = $gpa;
    }

    public function myGPA () 
    {
        return $this->gpa;
    }
}

class GradeAStudent extends Student 
{
    public function __construct($name, $age, $gpa, $wealth) 
    {
        parent::__construct($name, $age, $gpa);

        $this->gpa = 4.0;
        $this->wealth = "Outstanding";
    }

    public function myName ($title) 
    {
        return $title . $this->name;
    }
    
    public function myGPA () 
    {
        return $this->gpa;
    }

    public function myWealth () 
    {
        return $this->wealth;
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

$smartass = new GradeAStudent("Foo", 15, 4123123, "poor");

echo $aki->myName() . '<br/>';
echo $aki->myAge() . '<br/>';
echo $aki->myGPA() . '<br/>';

echo "============================" . '<br/>';

echo $bob->myName() . '<br/>';
echo $bob->myAge() . '<br/>';
echo $bob->myReviewScore() .'<br/>';

echo "============================" . '<br/>';

echo $smartass->myName("Ms.") . '<br/>';
echo $smartass->myAge() . '<br/>';
echo $smartass->myGPA() . '<br/>';
echo $smartass->myWealth() . '<br/>';

