<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%);
            min-height: 100vh;
        }
        .card {
            border-radius: 18px;
            overflow: hidden;
        }
        .navbar {
            background: linear-gradient(90deg, #d66d75, #e29587);
        }
        .btn-login {
            background: linear-gradient(90deg, #8e2de2, #f107a3);
            border: none;
            color: #fff;
            font-weight: bold;
        }
        .btn-login:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">💜 ระบบสมาชิก</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-header text-white text-center" style="background: linear-gradient(90deg, #8e2de2, #f107a3);">
                        <h4>เข้าสู่ระบบ</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="index.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">ชื่อผู้ใช้</label>
                                <input type="text" name="username" class="form-control border-secondary" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">รหัสผ่าน</label>
                                <input type="password" name="password" class="form-control border-secondary" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-login">เข้าสู่ระบบ</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-light">
                        <a href="register.php" class="fw-bold text-decoration-none" style="color:#8e2de2;">สมัครสมาชิกใหม่</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>