<?php
class Person {
    public function introduce() {
        echo "I am a person.<br>";
    }
}

class Student extends Person {
    public function introduce() {
        echo "I am a student.<br>";
    }
}

class Teacher extends Person {
    public function introduce() {
        echo "I am a teacher.<br>";
    }
}

$people = [new Person(), new Student(), new Teacher()];

foreach ($people as $p) {
    $p->introduce();
}
?>