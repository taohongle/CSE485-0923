<?php
// $arr = ['1','B','C','E'];
// $arr = ['a',0,null,false];
$arr = ['1','b','c','d'];
$arr1 = array_map('strtoupper',$arr);

print_r($arr1);