<?php

echo "Введите первый отрезок\n";
$a1 = readline("a1 = ");
$a2 = readline("a2 = ");

echo "Введите второй отрезок\n";
$b1 = readline("a1 = ");
$b2 = readline("b2 = ");

$a3 = max($a1, $a2);
$b3 = min($b1, $b2);

if ($a3 < $b3) {
    echo "Пересечения нет";
} elseif ($a3 == $b3) {
    echo "Пересечени в точке: $a3";
} else {
    echo "Пересечение отрезков: $b3 $a3";
}
