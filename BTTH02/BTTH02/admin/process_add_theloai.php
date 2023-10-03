<?php

require_once "../config/connect.php";

if(isset($_POST['sbmThem'])){
    $ten_tloai = $_POST['ten_tloai'];
}
$sql_check = "SELECT * FROM theloai WHERE ten_tloai = '$ten_tloai'";
$stmt = $connect->prepare($sql_check);
$stmt->execute();

if($stmt->rowCount()>0){
    header("location:add_category.php?error=existed");
}
else{
    $sql_insert = "INSERT INTO theloai(ten_tloai) VALUES ('$ten_tloai')";
    $stmt = $connect->prepare($sql_insert);
    $stmt->execute();
    header("location:category.php?success=added");
}