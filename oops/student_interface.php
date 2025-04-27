<?php
interface Displayable {
    public function display();
}

class bollywood implements Displayable {
    public $movie;

    public function __construct($movie) {
        $this->movie = $movie;
    }

    public function display() {
        echo "Movie name  : $this->movie";
    }
}

$bollywood = new bollywood("Intersteller");
$bollywood->display();
?>