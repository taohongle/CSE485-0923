<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
        <?php include "./Layout/header.php" ?>

        <div class="row d-flex justify-content-around py-5">
            <div class= "col-md-3 bg-secondary px-0 rounded-4">
                <form action="" class="">
                    <div class="d-flex justify-content-around align-items-center">
                        <h3 class="text-white my-3 mx-3">Quên mật khẩu</h3>
                    </div>
                    <div class="input-group my-3 px-3">
                        <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="d-flex justify-content-end my-5">
                        <button class="btn btn-warning mx-3" type="submit">Gửi yêu cầu</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <?php include "./Layout/footer.php" ?>
        </div>
</body>
</html>