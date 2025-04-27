<form method="post">
    Enter a number: <input type="number" name="number"><br>
    <input type="submit" name="submit" value="Calculate Factorial">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['number'];
    $factorial = 1;

    if ($num < 0) {
        echo "Factorial is not defined for negative numbers.";
    } elseif ($num == 0 || $num == 1) {
        echo "The factorial of $num is: 1";
    } else {
        for ($i = 2; $i <= $num; $i++) {
            $factorial *= $i;
        }
        echo "The factorial of $num is: $factorial";
    }
}
?>
