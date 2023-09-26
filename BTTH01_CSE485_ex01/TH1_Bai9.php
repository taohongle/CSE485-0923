<?php
// $arr = ['1','B','C','E'];
$arr = ['a',0,null,false];
$arr1 = array_map('strtolower',$arr);

print_r($arr1);