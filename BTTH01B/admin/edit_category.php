<?php
require_once "../config/connect.php";
if(isset($_GET['ma_tloai'])){
    $ma_tloai = $_GET['ma_tloai'];
}

    try{
        //Buoc 1: Ket noi DBServer
        
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM theloai WHERE ma_tloai='$ma_tloai'";
        $stmt = $connect->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            $row = $stmt->fetch();
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - vùng quản trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid header sticky-top bg-light shadow mb-4 bg-body p-3">
        <?php include"../Layout/header_admin.php" ?>
    </div>

   <div class="main-content-admin">
        <div class="container">
            <h3 class="text-uppercase text-center">Sửa thể loại</h3>
            <form action="process_edit_theloai.php" method="post">
                <div class="input-group my-3 px-3">
                        <span class="input-group-text">Mã thể loại</span>
                        <input type="text" class="form-control" name="ma_tloai" value="<?= $row[0];?>" readonly>
                </div>
                <div class="input-group my-3 px-3">
                        <span class="input-group-text">Tên thể loại</span>
                        <input type="text" class="form-control" name="ten_tloai" value="<?= $row[1];?>">
                </div>
                <div class="d-flex justify-content-end m-3">
                    <button type="submit" class="btn btn-success" name="sbmSua">Sửa</button>
                    <a href="category.php" class="btn btn-warning">Quay lại</a>
                </div>
            </form>
        </div>
   </div>

    <?php include "../Layout/footer.php" ?>
</body>
</html>