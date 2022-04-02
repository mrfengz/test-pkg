<?php
namespace August\TestPkg;

class Hello
{
    private $name = '';

    public function __construct($name = 'world')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHello()
    {
        echo "Hello ".$this->name;
    }
}