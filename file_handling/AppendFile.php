<?php
$handle = fopen("example.txt", "a"); 
if ($handle) {
    $text = "\nNew appended line.";
    fwrite($handle, $text);
    fclose($handle);
    echo "Data appended successfully.";
} else {
    echo "Unable to open file.";
}
?>
