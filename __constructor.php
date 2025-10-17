<?php
// 🧩 Task 1: Default Values in Constructor 

// Class User{
//     public $name;
//     public $role;
//     function __construct($name = "Nadeem", $role = "Viewer" ){
//         $this->name = $name;
//         $this->role = $role;

//     }
// }
// $user1 = new User();
// $user2 = new User("Abdullah", "Manager");
// print_r($user1) ;
// echo "<br/>";
// print_r($user2);

// 🧩 Task 2: Constructor for 🧩 Task 3: Constructor for Database Connection (Simulation) Connection (Simulation)


class Database
{
    public $conn;
    function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "users_db");
        if (!$this->conn) {
            die("Connection failed " . mysqli_connect_error());
        }
    }
}

$myDatabase = new Database();
