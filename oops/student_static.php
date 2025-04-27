<?php
class StudentCount {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

StudentCount::increment();
StudentCount::increment();

echo "Total Students: " . StudentCount::getCount();
?>