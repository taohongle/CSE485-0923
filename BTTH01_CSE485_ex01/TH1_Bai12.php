<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
    ];
function LayDauCuoi($numbers){
    $first = reset($numbers);
    $last = end($numbers);
    echo "Phần tử đầu tiên: $first <br>";
    echo "Phần tử cuối cùng: $last <br>";
}
function minMaxSum($numbers){
    $max = max($numbers);
    $min = min($numbers);
    $sum = array_sum($numbers);
    echo "Số lớn nhất: $max <br>";
    echo "Số nhỏ nhất: $min <br>";
    echo "Tổng: $sum <br>";
}
function tangGiamGiaTri($numbers){
    asort($numbers);
    echo "Mảng theo chiều tăng dần các giá trị là: ";
    print_r($numbers);
    echo "<br>";

    arsort($numbers);
    echo "Mảng theo chiều giảm dần các giá trị là: ";
    print_r($numbers);
    echo "<br>";
}
function tangGiamKey($numbers){
    ksort($numbers);
    echo "Mảng theo chiều tăng các khoá:";
    print_r($numbers);
    echo "<br>";
    krsort($numbers);
    echo "Mảng theo chiều giảm các khoá:";
    print_r($numbers);
    echo "<br>";
}

LayDauCuoi($numbers);
minMaxSum($numbers);
tangGiamGiaTri($numbers);
tangGiamKey($numbers);

