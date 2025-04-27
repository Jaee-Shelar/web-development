<?php
class Student {
    public $name;
    public $age;
    public $marks;
    public $cgpa;

    public function __construct($name, $age, $marks, $cgpa) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
        $this->cgpa = $cgpa;
    }

    public function display() {
        echo "Name: $this->name <br>";
        echo "Age: $this->age <br>";
        echo "Marks: $this->marks <br>";
        echo "CGPA: $this->cgpa <br>";
    }
}

$student1 = new Student("Jaee", 20, 490, 9.2);
$student1->display();
?>