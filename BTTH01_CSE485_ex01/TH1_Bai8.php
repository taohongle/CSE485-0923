<?php
$array = ['programming','php','basic','dev','is','program is PHP'];
//tim chuoi lon nhat nho nhat
$maxArr = max($array);
$minArr = min($array);
echo "Chuỗi lớn nhất: $maxArr <br>";
echo "Chuỗi nhỏ nhất: $minArr <br> ";
//tim chuoi tuong ung,do dai la 2: is
$arr1 = [];
foreach ($array as $i){
    if (strlen($i) == 2) {
        $arr1[] = $i;
    }
}
print_r($arr1);