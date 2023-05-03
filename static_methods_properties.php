<?php
class Person
{
    private $name;
    private $age;
    public static $min_pass_len = 5;

    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$min_pass_len) {
            return true;
        } else {
            return false;
        }
    }
}

$passphrase = 'pass';
if (Person::validatePass($passphrase)) {
    echo 'The password is valid';
} else {
    echo 'The password is NOT valid';
}
