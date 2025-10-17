<?php

// class Auth
// {
//     public $name;
//     public $age;
//     function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
// }
// class Student extends Auth {}

// $a1 =  new Auth("nadeem", 20);
// $s1 = new Student("Ahsan", 40);

// print_r($a1);
// echo "<br/>";
// print_r($s1);


// class Fruit{
//     public $name;

//     public function setName($n){
//         $this->name = $n;
//     }

//     public function intro(){
//         echo "This is a fruit: $this->name <br>";
//     }
// }

// class Mango extends Fruit{
//     public function message(){
//         echo "I am a type of fruit.<br>";
//     }
// }

// $mango = new Mango();
// $mango->setName("Mango");
// $mango->message();
// $mango->intro();

// class Fruit{
//     public $name;
//     public $age;
//     function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;
        
//     }
// }

// class Vegetables extends Fruit{
// }



// $f = new Fruit("Nadeem", 20);
// $v = new Vegetables("damd", 90);
// print_r($f);
// echo "<br/>";
// print_r($v);


class Fruit {
    public $name;
    public $age;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

class Vegitabls extends Fruit {
    public $weight;
     function __construct($name, $age, $weight){
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }

}


$f = new Fruit("Nadeem", 20);
$v = new Vegitabls("Abdullah", 40, "50 gram");
print_r($f);
echo "<br/>";
print_r($v);
?>
