<?php
$handle = fopen("example.txt", "w");
if ($handle) {
    $text = "Hello, this is a file write example.";
    fwrite($handle, $text);
    fclose($handle);
    echo "Data written successfully.";
} else {
    echo "Failed to write.";
}
?>
