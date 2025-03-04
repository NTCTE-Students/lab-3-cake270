<?php
$array = [5,12,4,6,8,7,1,10,7];
$element = 4;
$key = array_search($element, $array);

if ($key !== false) {
    echo "Элемент $element найден на индексе $key.";
} else {
    echo "Элемент $element не найден.";
}
?>
