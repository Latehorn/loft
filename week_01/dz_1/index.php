<?php
//Task 1
$name = "Андрей";
$age = 31;
echo "Меня зовут: $name <br>";
echo "Мне $age год <br>";
echo "“!|/’”\\ ";
echo "<hr>";

//Task 2
define('TOTAL', 80);
define('MARKERS', 23);
define('PENCIL', 40);
define('PAINT', (TOTAL - (MARKERS + PENCIL)));
print_r('На школьной выставке ' . TOTAL . ' рисунков. ' . MARKERS . ' из них выполнены фломастерами, ' . PENCIL . ' карандашами и ' . PAINT . ' красками.');
echo "<hr>";

//Task 3
$age = mt_rand(-20, 85);
if ($age >= 18 && $age <= 65) {
    print_r('Вам еще работать и работать');
} elseif ($age > 65) {
    print_r('Вам пора на пенсию');
} elseif ($age > 0 && $age < 18) {
    print_r('Вам ещё рано работать');
} else {
    print_r('Неизвестный возраст');
}
echo "<hr>";

//Task 4
$day = mt_rand(-5, 10);
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
echo "<hr>";

//Task 5
$bmw = array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015,
);

$toyota = array(
    'model' => 'Corolla',
    'speed' => 240,
    'doors' => 5,
    'year' => 2015,
);

$opel = array(
    'model' => 'Corsa',
    'speed' => 220,
    'doors' => 5,
    'year' => 2007,
);

$car ['bmv'] = $bmw;
$car ['toyota'] = $toyota;
$car ['opel'] = $opel;
foreach ($car as $key => $type) {
    echo 'CAR ' . $key . '<br>';
    foreach ($type as $car) {
        echo $car . ' ';
    }
    echo '<br><br>';
}
echo "<hr>";

//Task 6
echo '<table border="1" style="border-collapse: collapse">';
for ($i = 1; $i < 11; $i++) {
    echo "<tr style= 'text-align: center; min-width: 100px; height: 40px; margin: 0 auto'>";
    for ($k = 1; $k < 11; $k++) {
        $res = $i * $k;
        if ($i % 2 == 1 && $k % 2 == 1) {
            echo "<td>[$res]</td>";
        } elseif ($i % 2 == 0 && $k % 2 == 0) {
            echo "<td>($res)</td>";
        } else {
            echo "<td>$res</td>";
        }
    }
}
echo '</table>';

