
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
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
                <form action="process_login.php" class="" method="post">
                    <div class="d-flex justify-content-around align-items-center">
                        <h3 class="text-white my-3 mx-3">Sign in</h3>
                        <div class="social-icon">
                            <a href=""><i class="fa-brands fa-square-facebook fs-1 text-warning"></i></a>
                            <a href=""><i class="fab fa-google-plus-square fs-1 text-warning"></i></a>
                            <a href=""><i class="fa-brands fa-square-twitter fs-1 text-warning"></i></a>
                        </div>
                    </div>
                    <div class="input-group my-3 px-3">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="input-group my-3 px-3">
                        <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-check my-3 mx-3">
                        <label class="form-check-label text-white">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-warning mx-3" name="login" type="submit">Login</button>
                    </div>
                    <div class="text-center mt-5" style="border-top:1px solid black">
                        <p>Don't have an account?
                            <span><a href="" class="text-warning text-decoration-none">Sign up</span>
                            <br> Forgot your password?</a>
                        </p>
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <?php include "./Layout/footer.php" ?>
        </div>
</body>
</html>