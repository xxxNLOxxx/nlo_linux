<?php
try {
    $file = @fopen("non_existent.txt", "r");
    if (!$file) {
        throw new Exception("Ошибка: Не удалось открыть файл.");
    }
} catch (Exception $e) {
    echo "Исключение 1.1: " . $e->getMessage() . "<br>";
}

try {
    $a = 10;
    $b = 0;
    if ($b === 0) {
        throw new Exception("Деление на ноль запрещено!");
    }
    echo $a / $b;
} catch (Exception $e) {
    $errorMsg = date('Y-m-d H:i:s') . " - " . $e->getMessage() . PHP_EOL;
    file_put_contents('log.txt', $errorMsg, FILE_APPEND);
    echo "Исключение 1.2 записано<br>";
}

try {
    $countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
    $key = 'Germany';
    if (!isset($countries[$key])) {
        throw new Exception("Ключ '$key' в массиве не найден.");
    }
    echo $countries[$key];
} catch (Exception $e) {
    echo "Исключение 1.3: " . $e->getMessage() . "<br>";
}

echo mktime(10, 25, 0, 3, 15, 2025) . "<br>";

echo time() - mktime(8, 5, 59, 10, 2, 1990) . " секунд прошло<br>";

echo date('Y.m.d H:i:s') . "<br>";

echo date('Y.09.01') . "<br>";

echo date('l', mktime(0, 0, 0, 2, 2, 2000)) . "<br>";

$week = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
echo "Сегодня: " . $week[date('w')] . "<br>";
echo "12.06.2016 был: " . $week[date('w', mktime(0, 0, 0, 6, 12, 2016))] . "<br>";
echo "Мой день рождения был в: " . $week[date('w', mktime(0, 0, 0, 8, 21, 2007))] . "<br>";

echo '<form method="GET">
    <input type="date" name="date1">
    <input type="date" name="date2">
    <input type="submit">
</form>';

if (isset($_GET['date1'], $_GET['date2'])) {
    $d1 = strtotime($_GET['date1']);
    $d2 = strtotime($_GET['date2']);
    echo "Наибольшая дата: " . ($d1 > $d2 ? $_GET['date1'] : $_GET['date2']) . "<br>";
}
