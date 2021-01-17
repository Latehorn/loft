<?php

/*
Задание #1

Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.
*/

function task1(array $arrayString, bool $return = true)
{
    $out_p = implode("\n", array_map(function (string $str) {
        return "<p>$str</p>";
    }, $arrayString));
    $out = implode(' ', $arrayString);

    if ($return) {
        return $out_p;
    }

    echo (string)$out;
}


/*
 * Задание #2

Функция должна принимать переменное число аргументов.
Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
Остальные аргументы это целые и/или вещественные числа.
 */

function task2(string $token, ...$operand)
{
    switch ($token) {
        case '+':
            return array_sum($operand);
        case '-':
            return $result = array_shift($operand) - array_sum($operand);
        case '*':
            $one = 1;
            foreach ($operand as $opera) {
                $one *= $opera;
            }
            return $one;
        case '/':
            $out = array_shift($operand);
            foreach ($operand as $opera) {
                $out /= $opera;
            }
            return $out;
        default:
            trigger_error("Не верный оператор");
            return 'ERROR';
    }
}

/*Задание #3

Функция должна принимать два параметра – целые числа.
Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию. (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна быть выполнена с использованием тега <table>
В остальных случаях выдавать корректную ошибку. */

function task3($num_a, $num_b)
{
    if (!is_int($num_a) || !is_int($num_b) || ($num_a < 0 || $num_b < 0)) {
        trigger_error("A или B не является числом или имеет отрицательное значение");
        return false;
    }
    $result = '<table>';
    for ($i = 1; $i <= $num_a; $i++) {
        $result .= "<tr style= 'text-align: center'>";
        for ($k = 1; $k <= $num_b; $k++) {
            $res = $i * $k;
            $result .= "<td> $res </td>";
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}

function task6(string $fileName)
{
    $file = fopen($fileName, 'r');
    if (!$file) {
        return false;
    }
    $str = '';
    while (!feof($file)) {
        $str .= fgets($file, 1024);
    }
    echo $str;
}

