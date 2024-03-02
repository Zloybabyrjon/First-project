<?php

echo "Введите первое число:\n";
$firstNumber = readline();
echo "Введите математическую операцию:\n";
$operation = readline();
echo "Введите второе число:\n";
$secondNumber = readline();

if ($operation === "+") {
    echo "Ответ:". $firstNumber + $secondNumber;
} elseif ($operation === "-") {
    echo "Ответ:".$firstNumber - $secondNumber;
} elseif ($operation === "*") {
    echo "Ответ:". $firstNumber * $secondNumber;
} elseif ($operation === 0) {
    echo "На ноль делить нельзя";
} elseif ($operation === "/") {
    echo "Ответ:".$firstNumber / $secondNumber;
} else {
    echo "Не верная операция";
}
