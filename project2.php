<?php

echo"Введите первый цвет:\n";
$a = readline();
echo"Введите второй цвет:\n";
$b = readline();

if($a == "Красный")
{
    if($b =="Красный")
    {
        echo"Получился: Красный";
    }
    elseif($b =="Синий")
    {
        echo"Получился: Фиолетовый";
    }
    elseif($b =="Жёлтый")
    {
        echo"Получился: Оранжевый";
    }
}
if($a == "Синий")
{
    if($b =="Синий")
    {
        echo"Получился: Синий";
    }
    elseif($b =="Красный")
    {
        echo"Получился: Фиолетовый";
    }
    elseif($b =="Жёлтый")
    {
        echo"Получился: Зелёный";
    }
}
if($a == "Жёлтый")
{
    if($b =="Жёлтый")
    {
        echo"Получился: Жёлтый";
    }
    elseif($b =="Синий")
    {
        echo"Получился: Зелёный";
    }
    elseif($b =="Крастный")
    {
        echo"Получился: Оранжевый";
    }
}
else
{
    echo"Ошибка! Таких цветов нету!";
}