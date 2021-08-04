<?php
$k = 5; //for 5 rand numbers
$arr = [];
// add 5 random numbers
for ($i=0; $i<= $k-1; ++$i) {
    $arr[$i] = rand(0, 100);
}
echo "Создан массив $k случайных значений".'<br>';
foreach ($arr as $key => $value) {
    echo "$value". '<br>';
}

// search max & min
echo 'Максимальное значение: '. max($arr). '<br>';
echo 'Минимальное значение: '. min($arr). '<br><p>';
echo '<p>';

// index of max & min
$mini = array_search(min($arr), $arr);
$maxi = array_search(max($arr), $arr);

// variables for min & max
$min = min($arr);
$max = max($arr);

// Relocate max and min on index
$arr[$mini] = $max;
$arr[$maxi] = $min;

echo "Меняем местами: ". '<br>';
foreach ($arr as $key => $value) {
    echo "$value". '<br>';
}
?>