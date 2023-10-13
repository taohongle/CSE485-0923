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
                
                <form action="?controller=doctor&action=store" method="post">
                    <div class="mb-3">
                        <label for="tenBacSi">Tên bác sĩ</label>
                        <input type="text" name="tenBacSi" id="tenBacSi" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="chuyenKhoa">Chuyên khoa</label>
                        <input type="text" name="chuyenKhoa" id="chuyenKhoa" class="form-control">
                    </div>
                    <button class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>