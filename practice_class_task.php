<?php
// 1 
// Ek class Car banao.
// Uske andar ek property $name rakho.
// Phir ek function set_name() aur get_name() likho — jaise Fruit wali example thi.
// Phir do objects banao ($car1, $car2) aur dono ke names print karo.
// class Car
// {
//     public $name;
//     function set_name($name)
//     {
//         $this->name = $name;
//     }

//     function get_name()
//     {
//         return $this->name;
//     }
// }

// $car1 = new Car();
// $car2 = new Car();

// $car1->set_name("BMW");
// $car2->set_name("Mehran");


// echo $car1->get_name();
// echo "<br/>";
// echo $car2->get_name();


// 🧩 Task 2:
// Ek class Student banao.
// Usme properties rakho: $name aur $age.
// Constructor (__construct) ka use karo taake object bante hi name aur age set ho jayein.
// Phir ek function get_info() banao jo name aur age dono return kare.

// ✅ Task 2: Student Example
// Ek class Student banao.
// Usme:
// Properties: $name, $age
// Functions: set_name(), set_age(), get_name(), get_age()
// Phir ek object $std1 banao aur uska name aur age set karke print karo.
// Output Example:
// Name: Ali  
// Age: 20

// class Student{
//    public $name;
//     public $age;
//     function set_name($name){
//          $this->name = $name;
//     }

//     function set_age($age){
//          $this->age = $age;
//     }

//     function get_info(){
//         return "Name: $this->name, Age: $this->age";


//     }
// }

// $std1  = new Student;
// $std2  = new Student;

// $std1->set_name("Ali");
// $std2->set_name(20);
// echo $std1->get_info();
// echo "<br/>";
// echo $std2->get_info();



// ✅ Task 3: Book Example
// Ek class Book banao.
// Usme:
//Properties: $title, $author
// Function: set_book($title, $author)
// Function: get_book() jo dono return kare
// Phir ek object banao aur book ka title aur author print karo.
// Output Example:
// Title: PHP Basics  
// Author: Nadeem Akbar

// class Book{
//     public $title;
//     public $author;
//     function setBook($title, $author){
//         $this->author = $author;
//         $this->title = $title;

//     }

//     function getBook() {
//         return "Author: $this->author <br/> Title:  $this->title ";
//     }
// }

// $result = new Book;
// $result->setBook("PHP Basics", "Nadeem Akbar");
// echo $result->getBook("<br/>");

// ✅ Task 4: Calculator Example
// Ek class Calculator banao.
// Usme:
// Properties: $num1, $num2
// Functions:
// set_values($a, $b)
// add()
// multiply()
// Phir object banao, numbers set karo, aur dono functions ka result print karo.
// Output Example:
// Addition: 15  
// Multiplication: 50


class Calculator
{
    public $num1;
    public $num2;

    function setValues($a, $b) {}
}
