<?php
$file = fopen("test.txt", "w");
fwrite($file, "Привет, мир!");
fclose($file);
$file = fopen("test.txt", "r");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

rename("test.txt", "mir.txt");
if (!is_dir("folder")) {
    mkdir("folder", 0775);
}
rename("mir.txt", "folder/mir.txt");

