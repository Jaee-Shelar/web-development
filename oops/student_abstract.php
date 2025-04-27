<?php
abstract class Human {
    public $name;

    abstract public function getRole();
    
    public function sayHello() {
        echo "Hello, I am $this->name<br>";
    }
}

class Student extends Human {
    public function getRole() {
        return "Student";
    }
}

$stud = new Student();
$stud->name = "Jaee";
$stud->sayHello();
echo "Role: " . $stud->getRole();
?>