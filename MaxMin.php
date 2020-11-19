<?php
function finMin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function finMax($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$nums = [];
for ($i = 0; $i < 100; $i++) {
    $nums[$i] = rand(1, 101);
}
foreach ($nums as $num) {
    echo $num . ', ';
}
$minValue = finMin($nums);
echo '<br/>';
echo "The mininum value is: " . $minValue;
$maxValue = finMax($nums);
echo '<br/>';
echo "The maxinum value is: " . $maxValue;
