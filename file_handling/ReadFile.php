<?php
$handle = fopen("example.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line . "<br>";
    }
    fclose($handle);
} else {
    echo "Error opening file.";
}
?>
