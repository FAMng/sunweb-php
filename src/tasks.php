<?php


// Task 1

/*$var = 'hello world';

for ($i = 0; $i < strlen($var); $i++) {
    echo ' ' . substr($var, $i, 1);
}*/

// Task 2

/*mb_internal_encoding('UTF-8');
$var = 'Привет мир';

for ($i = 0; $i < mb_strlen($var); $i++) {
    echo ' ' . mb_substr($var, $i, 1);
}*/

// Task 3

/*echo '<table style="border: 1px solid black">';

echo '<tr>';
for ($i = 1; $i <= 10; $i++) {
    echo '<td>' . $i . '</td>';
}
echo '</tr>';

for ($i = 1; $i <= 10; $i++) {
    echo '<tr><td>' . $i . '</td>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td>' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';*/

// Task 4
/*$i = 0;
while($i <= 100) {
    if($i % 3 === 0) {
        echo $i . ' ';
    }
    $i++;
}*/

//Task 5

/*$arr = [
    'Тюменская' => ['Тюмень', 'Ишим'],
    'Тверская' => ['Тверь', 'Ржев'],
    'Томская' => ['Томск', 'Северск'],
    'Сахалинская' => ['Южно-Сахалинск', 'Корсаков'],
    'Ростовская' => ['Ростов-на-Дону']
];

foreach ($arr as $reg => $city) {
    echo $reg . ': ' . implode(', ', $city) . "\n";
}*/


?>
//Task 6
<!--<!DOCTYPE html>
<html>
<head>
    <title>Транслитерация слова</title>
</head>
<body>
<h2>Транслитор слов</h2>
    <form method="POST">
        <label for=text>Введите слово(а):</label><br>
        <input type="text" id="text" name=text>
        <input type="submit" value="Транслит">
    </form>
</body>
</html>-->

