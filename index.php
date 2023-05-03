<?php
// Create a person class
class Person
{
    private $_name;
    private $_age;

    // Constructor runs automatically when an object has been created
    public function __construct($name, $age)
    {
        echo __CLASS__ . ' ' . 'has been instantiated <br>';
        $this->_name = $name;
        $this->_age = $age;
    }

    // Destructor runs automatically when there's no reference to an objec, used for cleanup, closing database connections etc

    public function __destruct()
    {
        echo 'Destructor ran...';
        echo '<br>';
    }

    // Say Hello function
    public function sayHello()
    {
        return 'Hello ' . $this->_name . '<br>' . 'You are ' . $this->_age;
    }
}

// Instantiate Person class
$person1 = new Person('Sergei', 39);
echo $person1->sayHello();

echo '<br>';

$person2 = new Person('Julia', 25);
echo $person2->sayHello();

echo '<br>';
$person3 = new Person('Daniil', 8);
echo $person3->sayHello();
echo '<br>';
