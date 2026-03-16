<?php
echo "Балух Георгий 9ПО-32 <br>";
//Заадание 1 - Дан массив с элементами 'a', 'b', 'c', 'd', 'e'. 	
//С помощью функции array_map сделайте из него 	массив 'A', 'B', 'C', 'D', 'E
$array1 = ['a', 'b', 'c', 'd', 'e'];
$new_array1 = array_map('strtoupper', $array1);
print_r($new_array1);
echo "<br>";

//Задание 2 - Дан массив $arr. С помощью функции count выведите последний элемент данного массива.
$arr = [0, 1, 2, 3, 4];
echo $arr[count($arr) - 1];

//Задание 3 - Дан массив с числами. Проверьте, что в нем есть элемент со значением 3
$arr_numbers = [1,2,3,4,5,6,7];
$result3 = array_search(3, $arr_numbers);
if ($result3 == true) {
echo "<br> Число 3 есть <br>";
}
else {
echo "<br> Числа 3 нет";
}

//Задание 4 - Даны два массива: первый с элементами 1, 2, 3, 	второй с элементами 'a', 'b', 'c'. 
//Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.
$first_array = [1,2,3];
$second_array = ['a', 'b', 'c'];
$result4 = array_merge($first_array, $second_array);
print_r ($result4);
echo "<br>";

//Задание 5 - Дан массив с элементами 1, 2, 3, 4, 5. 
//С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4. 
$arr5 = [1,2,3,4,5];
$result5 = array_slice($arr5, 1, 3);
print_r($result5);
echo "<br>";

//Задание 6 - Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. 
//Запишите в массив $keys ключи из этого массива, а в $values – значения. 
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
print_r($keys);
print_r($values);
echo "<br>";

//Задание 7 - Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1, 'b'=>2, 'c'=>3'.
$arr7_w = ['a', 'b', 'c'];
$arr7_n = [1,2,3];
$result7 = array_combine($arr7_w, $arr7_n);
print_r($result7);
echo "<br>";

//Задание 8 - Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'
$arr8 = ['a', '-', 'b', '-', 'c', '-', 'd'];
$result8 = array_search('-', $arr8);
echo $result8, "<br>";

//Задание 9 - Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'.Попробуйте на нем различные типы сортировок.

$arr9 = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];;
print_r($arr9);
echo "<br>";

// 1. Сортировка по ключам (ksort) 
$sortByKey = $arr9;
ksort($sortByKey);
print_r($sortByKey);
echo "<br>";

// 2. Сортировка по значениям(asort)
$sortByValue = $arr9;
asort($sortByValue);
print_r($sortByValue);
echo "<br>";

// 3. Обратная сортировка по ключам (krsort) 
$sortByKeyRev = $arr9;
krsort($sortByKeyRev);
print_r($sortByKeyRev);
echo "<br>";

// 4. Обратная сортировка по значениям (arsort)
$sortByValueRev = $arr9;
arsort($sortByValueRev);
print_r($sortByValueRev);
echo "<br>";

//Задание 10 - Дана строка '1234567890'. Найдите сумму цифр из этой строки не используя цикл. 
//Для конвертации строки в массив используйте функцию str_split.
$str10 = '1234567890';
$arr10 = str_split($str10);
$result10 = array_sum($arr10);
print_r($result10);
echo "<br>";

//Задание 11 - Заполните массив 10-ю буквами 'x'
$result11 = array_fill(0, 10, 'x');
print_r($result11);
echo "<br>";

//Задание 12 - Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. 
//Запишите в новый массив элементы, которые есть и в том, и в другом массиве.
$arr12_1 = [1, 2, 3, 4, 5];
$arr12_2 = [3, 4, 5, 6, 7];
$result12 = array_intersect($arr12_1, $arr12_2);
print_r($result12);
