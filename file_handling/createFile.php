<?php
$handle = fopen("example.txt", "w"); 
if ($handle) {
    echo "File created/opened successfully.";
    fclose($handle); 
} else {
    echo "Unable to open the file.";
}
?>
