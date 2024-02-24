<?php

echo"Введите первый отрезок\n";
$a1 = readline("a1 = ");
$b1 = readline("b1 = ");

echo"Введите второй отрезок\n";
$a2 = readline("a2 = ");
$b2 = readline("b2 = ");

$a3 = max($a1,$b1);
$b3 = min($a2,$b2);

if ($a3 > $b3)
{
    echo"$b3 $a3";
}
elseif ($a3 == $b3)
{
    echo"Пересечени отрезков: $a3";
}
else
{
    echo"Пересечения нет";
}
