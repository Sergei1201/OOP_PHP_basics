<?php
// Create Person Class

class Person
{
    // Define protected properties
    protected $_name;
    protected $_age;

    // Define a constructor
    public function __construct($name, $age)
    {
        $this->_name = $name;
        $this->_age = $age;
    }
}

// Extend Person Class
class Customer extends Person
{
    private $_email;
    private $_membership;

    // Define a constructor
    public function __construct($name, $age, $email, $membership)
    {
        parent::__construct($name, $age);
        $this->_email = $email;
        $this->_membership = $membership;
    }

    // Get Customer Info
    public function getInfo()
    {
        echo 'Name: ' . $this->_name . '<br>';
        echo 'Age: ' . $this->_age . "<br>";
        echo 'Email: ' . $this->_email . '<br>';
        echo 'Membership: ' . $this->_membership . '<br>';
    }
}

// Instantiate Customer class
$customer1 = new Customer('Sergei', 39, 'sokolov@gmail.com', 'Premium');
echo $customer1->getInfo();
