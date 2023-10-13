<?php
    require "../config/connect.php";

    if(isset($_GET['ma_tloai'])){
        $ma_tloai = $_GET['ma_tloai'];
    }

    $sql_del = "DELETE FROM theloai WHERE ma_tloai = '$ma_tloai'";
    $stmt = $connect->prepare($sql_del);
    $stmt->execute();
    header("location:category.php?success=$ma_tloai");