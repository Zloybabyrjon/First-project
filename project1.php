<?php

$a;
$b;
$c;
$x;

echo"Введите первое число:\n";
$a=readline();
echo"Введите математическую операцию:\n";
$c=readline();
echo"Введите второе число:\n";
$b=readline();

if($c === "+")
{
    $x = $a + $b;
    echo "Ответ: $x";
}
elseif($c === "-")
{
    $x = $a - $b;
    echo "Ответ: $x";
}
elseif($c === "*")
{
    $x = $a * $b;
    echo "Ответ: $x";
}
elseif($c === "/")
{
    $x = $a / $b;
    echo "Ответ: $x";
}
elseif($c == 0)
{
    echo "На ноль делить нельзя";
}
else
{
    echo "Не верная операция";
}