<?php
class Fruit
{
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct()
    {
        echo "stoped";
    }
}

$reslut = new  Fruit("Nadeem", "Red");
echo "data is fetching....";
print_r($reslut);
