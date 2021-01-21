<?php
require('src/function.php');

//Задание #3.1
//
//Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:
//id - уникальный идентификатор, равен номеру эл-та в массиве
//name - случайное имя из 5-ти возможных (сами придумайте каких)
//age - случайное число от 18 до 45

$nameArray = ['Ольга', 'Игорь', 'Слава', 'Илья', 'Оксана'];
$randomName = array_flip($nameArray);

$arrayUser = [];
for ($i = 0; $i < 50; $i++) {
    $arrayUser[] = [
        'id' => $i + 1,
        'name' => array_rand($randomName),
        'age' => mt_rand(18, 45)];
}
//    echo '<pre>';
//    var_dump($arrayUser);

//Преобразуйте массив в json и сохраните в файл users.json
header('Content-type: application/json');
$json = json_encode($arrayUser);
//echo $json;
file_put_contents('users.json', $json);

//Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.
$data = json_decode(file_get_contents("users.json"), true);
//    echo '<pre>';
//    print_r($data);

//Посчитайте количество пользователей с каждым именем в массиве
$sumName = [];
for ($i = 0; $i < count($data); $i++) {
    $sumName[] .= $data[$i]['name'];
}
echo 'Количество пользователей с каждым именем в массиве: ';
var_dump(array_count_values($sumName));

//Посчитайте средний возраст пользователей
$sumAge = [];
for ($i = 0; $i < count($data); $i++) {
    $sumAge[] .= $data[$i]['age'];
}
$sumAgeOut = array_sum($sumAge) / (count($data) + 1);
//print_r($sumAge);
echo 'Средний возраст : ' . (round($sumAgeOut));

