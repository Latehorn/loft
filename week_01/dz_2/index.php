<?php
require('src/function.php');

//task 1
echo task1([1, 2, 6]);
task1([1, 2, 6], false);
echo '<hr>';

//task 2
echo '1 + 2 + 3 = ' . task2('+', 1, 2, 3) . '<br>';
echo '1 - 2 - 3 = ' . task2('-', 1, 2, 3) . '<br>';
echo '1 * 2 * 3 = ' . task2('*', 1, 2, 3) . '<br>';
echo '1 / 2 / 3 = ' . task2('/', 1, 2, 3) . '<br>';
echo '<hr>';

//task 3
task3(5, 6);
echo "<hr>";

//task 4
//Выведите информацию о текущей дате в формате 31.12.2016 23:59
echo date('d.m.Y H:i');
echo '<br>';
//Выведите unixtime время соответствующее 24.02.2016 00:00:00
echo strtotime('24.02.2016 00:00:00');
echo "<hr>";

//task 5
//Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
$stringOne = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $stringOne);
echo '<br>';
//Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”
$stringTwo = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $stringTwo);
echo '<hr>';

//task 6
//Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
$text = 'Hello again!';
$file = fopen('test.txt', 'w');
fwrite($file, $text);
fclose($file);

//Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.
task6('test.txt');

