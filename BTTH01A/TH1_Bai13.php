<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

//Tinh TBC
$sum = array_sum($numbers);
$count = count($numbers);
$average = $sum / $count;
echo "Trung binh là: $average ";
//Liet ke gia tri lon hon TBC
echo "<br>Các số có giá trị lớn hơn giá trị TB là: ";
foreach($numbers as $i){
    if($i > $average){
        echo $i ." ";
    }
}
//Liet ke gia tri nho hon hoac bang gia tri  TB
echo "<br>Các số có giá trị nhỏ hơn hoặc bằng giá trị TB là: ";
foreach($numbers as $i){
    if($i <= $average){
        echo $i ." ";
    }
}
