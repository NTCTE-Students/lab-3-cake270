<?php

// Создание массива
$colors = ['Красный', 'Зеленый', 'Синий'];

// Добавление элемента в массив
array_push($colors, 'Желтый');

// Вывод технической информации о массиве
var_dump($colors);

// Удаление последнего элемента массива
$lastColor = array_pop($colors);

var_dump($colors);
?>
