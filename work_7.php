<?php
$string = "кошечки собачки зайки хомячки";
$array = explode(" ", $string);
echo "Массив слов: " . implode(", ", $array);
?>
