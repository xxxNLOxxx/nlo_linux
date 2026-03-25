<?php
    $file=fopen("test.txt", "w");
    fwrite($file, "Привет мир");
    fclose($file);
    $file = fopen("test.txt", "r");
    while (!feof($file))
{
$str = fgets($file);
echo $str."<br />";
}
rename("test.txt", "mir.txt");
mkdir("folder", 0700);
rename("mir.txt", "/var/www/mySite.ru/folder");
copy("mir.txt", "world.txt");
echo filesize("world.txt");
echo "<br>";
echo filesize("world.txt") / 1024;
echo "<br>";
echo filesize("world.txt") / 1024 / 1024.<br>;
?>
