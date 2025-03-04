<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$array = [
    ["Имя", "Возраст", "Порода"],
    ["Павлик", 4, "ориентал"],
    ["Миша", 2, "британка"],
];

echo "<table border='1' style='border-collapse: collapse; width: 50%; margin: auto;'>";
foreach ($array as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td style='padding: 8px; text-align: center;'>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>