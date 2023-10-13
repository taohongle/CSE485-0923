<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý bệnh viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <?php include APP_ROOT."./public/layout/header.php"?>
        <h3 class="text-center text-uppercase">Quản lý bác sĩ</h3>
        <a href="?controller=doctor&action=add" class="btn btn-success">Thêm bác sĩ</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Mã bác sĩ</th>
                    <th scope="col">Tên bác sĩ</th>
                    <th scope="col">Chuyên khoa</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($doctors as $each){ ?>
                    <tr>
                        <td><?=$each->getId();?></td>
                        <td><?=$each->getTenBacSi();?></td>
                        <td><?=$each->getChuyenKhoa();?></td>

                        <td>
                            <a href="?controller=doctor&action=update&id=<?=$each->getId()?>"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <a onclick="return Del('<?php echo $each->getId();?>')" href="?controller=doctor&action=delete&id=<?=$each->getId();?>">
                                <i class="bi bi-trash3-fill"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script>
        function Del(name){
            return confirm("Bạn chắc chắn muốn xoá lớp học có mã là: " + name + "?");
        }
    </script>
</body>
</html>