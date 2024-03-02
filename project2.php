<?php

echo "Введите первый цвет:\n";
$firstColor = readline();
echo "Введите второй цвет:\n";
$secondColor = readline();

if ($firstColor === "Красный" && $secondColor === "Красный") {
    echo "Получился: Красный";
} elseif (
    ($firstColor === "Красный" && $secondColor === "Синий")
    || ($firstColor === "Синий" && $secondColor === "Красный")
) {
    echo "Получился: Фиолетовый";
} elseif (($firstColor === "Красный" && $secondColor === "Жёлтый") || ($firstColor === "Жёлтый" && $secondColor === "Красный")) {
    echo "Получился: Оранжевый";
} elseif ($firstColor === "Синий" && $secondColor === "Синий") {
    echo "Получился: Синий";
} elseif (($firstColor === "Синий" && $secondColor === "Жёлтый") || ($firstColor === "Жёлтый" && $secondColor === "Синий")) {
    echo "Получился: Зелёный";
} elseif ($firstColor === "Жёлтый" && $secondColor === "Жёлтый") {
    echo "Получился: Жёлтый";
} else {
    echo "Ошибка! Таких цветов нету!";
}
