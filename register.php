<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สมัครสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fbc2eb 0%, #a18cd1 100%);
            min-height: 100vh;
        }
        .card {
            border-radius: 18px;
            overflow: hidden;
        }
        .navbar {
            background: linear-gradient(90deg, #ff758c, #ff7eb3);
        }
        .btn-register {
            background: linear-gradient(90deg, #d66d75, #e29587);
            border: none;
            color: #fff;
            font-weight: bold;
        }
        .btn-register:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">🌸 ระบบสมาชิก</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg">
                    <div class="card-header text-white text-center" style="background: linear-gradient(90deg, #8e2de2, #f107a3);">
                        <h4>สมัครสมาชิก</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="register.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">ชื่อผู้ใช้</label>
                                <input type="text" name="username" class="form-control border-secondary" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ชื่อ-นามสกุล</label>
                                <input type="text" name="fullname" class="form-control border-secondary" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">อีเมล</label>
                                <input type="email" name="email" class="form-control border-secondary" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">รหัสผ่าน</label>
                                <input type="password" name="password" class="form-control border-secondary" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ยืนยันรหัสผ่าน</label>
                                <input type="password" name="confirm_password" class="form-control border-secondary" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-register">สมัครสมาชิก</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-light">
                        <a href="index.php" class="fw-bold text-decoration-none" style="color:#f107a3;">กลับไปหน้าเข้าสู่ระบบ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>