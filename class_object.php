<?php

class Fruit
{
    public $name;
    public $color;

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$banana->set_name("Bannan");

echo $banana->get_name();
echo "<br/>";
var_dump($apple instanceof Fruit);
echo "<br/>";
$apple->set_name("apple");
echo $apple->get_name();
echo "<br/>";
