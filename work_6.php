<?php
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $merged = array_merge($array1, $array2);
    echo"объединенный: ".
    implode (", ", $merged) ."";
    ?>