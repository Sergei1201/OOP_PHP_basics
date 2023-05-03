<?php
// Create a person class
class Person
{
    // Define private properties
    private $_name;
    private $_age;

    // Constructor runs automatically when the class has been instantiated
    public function __construct($name, $age)
    {
        echo 'Class ' . __CLASS__ . ' ' . 'has been instantiated <br>';
        $this->_name = $name;
        $this->_age = $age;
    }

    // Destructor run automatically when there's no reference to an object, when doing cleanup, closing connections to a database
    public function __destruct()
    {
        echo 'Destructor ran... <br>';
    }

    // Greeting method
    public function greeting()
    {
        return 'Hello ' . $this->_name . '! ' . 'You are ' . $this->_age . ' ' . 'years old';
    }

    // Get name
    public function getName()
    {
        return $this->_name;
    }

    // Set name
    public function setName($name)
    {
        $this->_name = $name;
    }

    // __get MAGIC METHOD
    public function __get($property)
    {
        // Check if the property exists
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    // __set MAGIC METHOD
    public function __set($property, $value)
    {
        // Check if the property exists
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }
}

// Instantiate Person class
$person1 = new Person('Sergei', 39);
echo $person1->greeting();
echo '<br>';
$person2 = new Person('Julia', 25);
echo $person2->greeting();
echo '<br>';

// $person1->setName('Alexander');
// echo $person1->getName();
// echo '<br>';
$person1->__set('_age', 40);
echo $person1->__get('_age');
