<?php
$file = fopen("test.txt", "w");
fwrite($file, "Привет, мир!");
fclose($file);
$file = fopen("test.txt", "r");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
