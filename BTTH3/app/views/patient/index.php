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
        <h3 class="text-center text-uppercase">Quản lý bệnh nhân</h3>
        <a href="?controller=patient&action=add" class="btn btn-success">Thêm bệnh nhân</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Họ và tên</th>  
                    <th scope="col">Ngày khám</th>
                    <th scope="col">Triệu chứng</th>
                    <th scope="col">Tên bác sĩ</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($patients as $each){ ?>
                    <?php $tenBacSi = $patientService->getNameDoctorByPatient($each); ?>
                    <tr>
                        <td><?=$each->getId();?></td>
                        <td><?=$each->getTenBenhNhan();?></td>
                        <td><?=$each->getNgayKham();?></td>
                        <td><?=$each->getTrieuChung();?></td>
                        <td><?= $tenBacSi;?></td>
                        <td>
                            <a href=""><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <a onclick="return Del('<?=$each->getId()?>')" href="?controller=patient&action=delete&id=<?=$each->getId()?>">
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