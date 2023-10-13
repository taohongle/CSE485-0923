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
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                
                <form action="?controller=patient&action=store" method="post">
                    <div class="mb-3">
                        <label for="tenBenhNhan">Tên bệnh nhân</label>
                        <input type="" name="tenBenhNhan" id="tenBenhNhan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="ngayKham">Ngày khám</label>
                        <input type="text" name="ngayKham" id="ngayKham" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="trieuChung">Triệu chứng</label>
                        <input type="text" name="trieuChung" id="trieuChung" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tenBacSi">Tên bác sĩ</label>
                        <select name="idBacSi" id="">
                            <?php 
                                $patientService = new PatientService();
                                $result = $patientService->getAllDoctorName();
                                foreach($result as $each){
                                ?>
                                <option value="<?=$each['id'] ?>"><?= $each['tenBacSi']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>