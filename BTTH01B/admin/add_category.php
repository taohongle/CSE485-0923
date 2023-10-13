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
            <h3 class="text-uppercase text-center">Thêm mới thể loại</h3>
            <form action="process_add_theloai.php" method="post">
                <div class="input-group my-3 px-3">
                        <span class="input-group-text">Tên thể loại</span>
                        <input type="text" class="form-control" name="ten_tloai">
                </div>
                <div class="d-flex justify-content-end m-3">
                    <button type="submit" class="btn btn-success" name="sbmThem">Thêm</button>
                    <a href="category.php" class="btn btn-warning">Quay lại</a>
                </div>
            </form>
        </div>
   </div>

    <?php include "../Layout/footer.php" ?>
</body>
</html>