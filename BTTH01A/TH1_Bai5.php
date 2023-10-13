<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

//Lấy giá trị 3 với key là b
$val1 = $a['b']['o']['b'];
echo "Lấy giá trị 3 với key là b: $val1 <br>";
//Lấy giá trị 1 có key là c
$val2 = $a['a']['c'];
echo "Lấy giá trị 1 với key là c: $val2 <br>";
//Lấy thông tin của phần tử có key là a
$info = $a['a'];
print_r($info);