<?php
$file = fopen("test.txt", "w");
fwrite($file, "Привет, мир!");
fclose($file);
echo "Содержимое test.txt: " . file_get_contents("test.txt") . "<br>";
rename("test.txt", "mir.txt");
if (!is_dir("folder")) {
    mkdir("folder", 0775);
}
rename("mir.txt", "folder/mir.txt");
copy("folder/mir.txt", "folder/world.txt");
$path = "folder/world.txt";
if (file_exists($path)) {
    $bytes = filesize($path);
    echo "Байты: " . $bytes . " B<br>";
    echo "МБ: " . ($bytes / (1024 * 1024)) . " MB<br>";
    echo "ГБ: " . ($bytes / (1024 * 1024 * 1024)) . " GB<br>";
}
if (file_exists("folder/world.txt")) {
    unlink("folder/world.txt");
    echo "Файл world.txt удален<br>";
}
echo "world.txt: " . (file_exists("folder/world.txt") ? "Существует" : "Не существует") . "<br>";
echo "mir.txt: " . (file_exists("folder/mir.txt") ? "Существует" : "Не существует") . "<br>";

// Часть 2
if (!is_dir("test")) mkdir("test");
rename("test", "www");
if (is_dir("www")) {
    rmdir("www");
    echo "Папка test создана, переименована в www и удалена<br>";
}
?>
