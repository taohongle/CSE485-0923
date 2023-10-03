<?php 
    require_once "../config/connect.php";

    $sql = "SELECT * FROM theloai";
    $stmt = $connect->prepare($sql);
    $stmt->execute();

    $theloai = $stmt->fetchAll();
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
            <a href="add_category.php"><button class="btn btn-success" name="">Thêm mới</button></a>
            <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên thể loại</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xoá</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($theloai as $tl){ ?>
                            <tr>
                                <td><?=$tl[0] ?></td>
                                <td><?=$tl[1] ?></td>
                                <td><a href="edit_category.php?ma_tloai=<?=$tl[0];?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td>
                                    <a href="process_delete_theloai.php?ma_tloai=<?= $tl[0];?>">
                                        <i class="bi bi-trash3-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>
   </div>

    <?php include "../Layout/footer.php" ?>
</body>
</html>