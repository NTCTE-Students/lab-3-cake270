<?php
$array = [9,10,6,5,7,3,4,2,1];
sort($array);
echo "по возрастанию: " . implode(", ", $array) . "\n";
rsort($array);
echo "по убыванию: " . implode(", ", $array);
?>
