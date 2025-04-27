<form method="post">
    Enter first number: <input type="number" name="num1" required><br>
    Enter second number: <input type="number" name="num2" required><br>
    Enter third number: <input type="number" name="num3" required><br>
    <input type="submit" name="submit" value="Find Largest">
</form>

<?php
if (isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "The largest number is: $num1";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "The largest number is: $num2";
    } else {
        echo "The largest number is: $num3";
    }
}
?>
