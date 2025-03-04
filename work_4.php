<?php
    $array = [1, 2, 2, 3, 4, 5, 5];
    $unique_array = array_unique($array);
    echo"чистый массив: ".
    implode (", ", $unique_array) ."";
?>

