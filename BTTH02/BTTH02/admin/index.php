<?php
    require_once "../config/connect.php";

    session_start();
    if(!isset($_SESSION['isLogin'])){
        header('location:../login.php');
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
            <div class="row ">
                <div class="col border rounded text-center py-3 m-2">
                    <p class="text-primary">Người dùng</p>
                    <p class="fs-2">110</p>
                </div>
                <div class="col border rounded text-center py-3 m-2">
                    <p class="text-primary">Thể loại</p>
                    <p class="fs-2">10</p>
                </div>
                <div class="col border rounded text-center py-3 m-2">
                    <p class="text-primary">Tác giả</p>
                    <p class="fs-2">20</p>
                </div>
                <div class="col border rounded text-center py-3 m-2">
                    <p class="text-primary">Bài viết</p>
                    <p class="fs-2">110</p>
                </div>
            </div>
        </div>
   </div>

    <?php include "../Layout/footer.php" ?>
</body>
</html>