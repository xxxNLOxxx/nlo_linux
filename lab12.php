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
