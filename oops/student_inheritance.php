<?php
class Person {
    public $fruit;

    public function greet() {
        echo "HI, I am  $this->fruit.<br>";
    }
}

class Student extends Person {
    public $taste;

    public function showCGPA() {
        echo "My taste is $this->taste.<br>";
    }
}

$student = new Student();
$student->fruit = "Mango";
$student->taste = "sweet";
$student->greet();
$student->showCGPA();
?>