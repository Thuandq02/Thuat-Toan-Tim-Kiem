<?php
$number = [1,2,3,4,4,5,3,2,35,5,5,3,4,7];
$value = 5;
$count = new SplStack();
for ($i=0; $i<count($number); $i++){
    if ($value === $number[$i]){
        $count->push($number[$i]);
    }
}
echo 'phan tu: '.$value.' xuat hien '.$count->count().' lan ';
echo '<br/>';
print_r(array_count_values($number));