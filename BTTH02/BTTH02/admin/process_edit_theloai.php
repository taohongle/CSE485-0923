<?php
    require "../config/connect.php";

    if(isset($_POST['sbmSua'])){
        $ma_tloai = $_POST['ma_tloai'];
        $ten_tloai = $_POST['ten_tloai'];
    }
    $sql_check = "SELECT * FROM theloai WHERE ten_tloai = '$ten_tloai' AND ma_tloai != '$ma_tloai'";
    $stmt = $connect->prepare($sql_check);
    $stmt->execute();

    if($stmt->rowCount()>0){
        header("location:edit_category.php?error=existed");
    }
    else{
        $sql_update = "UPDATE theloai set ten_tloai = '$ten_tloai' WHERE ma_tloai='$ma_tloai'";
        $stmt = $connect->prepare($sql_update);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            header("Location:category.php?success=updated");
        }
    }
    ?>